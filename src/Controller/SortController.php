<?php

namespace Src\Controller;

class SortController {

    private $requestMethod;
    private $boards = [[
            "Departure" => "Stockholm",
            "Arrival" => "New York",
            "Transportation" => "Plane",
            "TransportationNumber" => "SK22",
            "Seat" => "7B",
            "Gate" => "22"
        ],
        [
            "Departure" => "Madrid",
            "Arrival" => "Barcelona",
            "Transportation" => "Train",
            "TransportationNumber" => "78A",
            "Seat" => "45B"
        ],
        [
            "Departure" => "Gerona Airport",
            "Arrival" => "Stockholm",
            "Transportation" => "Plane",
            "TransportationNumber" => "SK455",
            "Seat" => "3A",
            "Gate" => "45B",
            "Baggage" => "334"
        ],
        [
            "Departure" => "Barcelona",
            "Arrival" => "Gerona Airport",
            "Transportation" => "Bus"
        ]];


    public function __construct($requestMethod)
    {
        $this->requestMethod = $requestMethod;
    }

    public function processRequest()
    {
        switch ($this->requestMethod) {
            case 'GET':
                $response = $this->sorter();
                break;
            default:
                $response = $this->notFoundResponse();
                break;
        }
        
        header($response['status_code_header']);
        if ($response['body']) {
            echo $response['body'];
        }
    }

    private function sorter(array $boards=NULL): array
    {
        $boards = $boards ? $boards : $this->boards;

        usort($boards, function($a, $b) {
            return $a['Arrival'] !== $b['Departure'];
        });
    
        $sorted = false;

        for ($i = 0; $i < count($boards); $i++) {
            if (empty($boards[$i + 1])) break;
    
            if ($boards[$i]['Arrival'] !== $boards[$i + 1]['Departure']) {
                $sorted = true;
                break;
            }
        }
    
        if ($sorted) return sorter($boards);
    
        $response['status_code_header'] = 'HTTP/1.1 200 OK';
        $response['body'] = json_encode($boards);
        return $response;
    }

    private function notFoundResponse(): array
    {
        $response['status_code_header'] = 'HTTP/1.1 404 Not Found';
        $response['body'] = null;
        return $response;
    }

}