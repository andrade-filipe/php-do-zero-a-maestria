<?php

    class Task {
        public $title;
        public $description;
        public $completed = false;

        function __construct($title, $description){
            $this->title = $title;
            $this->description = $description;
        }

        public function markAsCompleted(){
            return $this->completed = true;
        }

        public function markAsIncomplete(){
            return $this->completed = false;
        }

        public function getTitle(){
            return $this->title;
        }

        public function getDescription(){
            return $this->description;
        }

        public function isCompleted(){
            return $this->completed == true ? true : false;
        }
    }