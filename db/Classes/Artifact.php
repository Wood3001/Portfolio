<?php

    class Artifact {

        static protected $db;

        public $id;
        public $img_url;
        public $title;
        public $description;
        public $discipline;
        public $link_url;
        public $date_posted;
        public $nar_skill1;
        public $nar_skill2;
        public $nar_skill3;
        public $nar_skill4;
        public $nar_skill5;
        public $nar_tech1;
        public $nar_tech2;
        public $nar_tech3;
        public $nar_tech4;
        public $nar_tech5;
        public $nar_sec1;
        public $nar_sec2;
        public $nar_sec3;
        public $nar_sec4;
        public $nar_sec5;
        public $nar_sec6;
        public $nar_sec1_head;
        public $nar_sec2_head;
        public $nar_sec3_head;
        public $nar_sec4_head;
        public $nar_sec5_head;
        public $nar_sec6_head;
        public $nar_img1_url;
        public $nar_img2_url;
        public $nar_img3_url;
        public $nar_img4_url;
        public $nar_img5_url;
        public $nar_img6_url;
        public $nar_img1_alt;
        public $nar_img2_alt;
        public $nar_img3_alt;
        public $nar_img4_alt;
        public $nar_img5_alt;
        public $nar_img6_alt;
        public $nar_link;
        public $view_order;
        public $button_text;

        static public function set_db($db) {
            self::$db = $db;
        }

        // declare a function to retieve all information from the database
        static public function find_all() {
            // Find all objects & properties from the notes database
            $sql = "SELECT * FROM artifacts ORDER BY view_order";
            // declare a variable representing the database query results for the current class
            $result = self::$db->query($sql);
            // return the results of the database query
            return $result;
        }

        // declare a function to find an object by it's id property
        static public function find_by_id($id) {
            // Find an object from the database by it's ID property
            $sql = "SELECT * FROM artifacts WHERE id='{$id}'";
            // declare a variable representing the database query results for the current class
            $result = self::$db->query($sql);
            // return the database query result as an associative array
            return $result->fetch_assoc(); 
        }

        public static function compare(Artifact $x, Artifact $y){
            return $x->view_order <=> $y->view_order;

        }

        public function __construct($args) {
            $this->id = $args['id'] ?? null;
            $this->img_url = $args['img_url'] ?? null;
            $this->title = $args['title'] ?? null;
            $this->description = $args['description'] ?? null;
            $this->discipline = $args['discipline'] ?? null;
            $this->link_url = $args['link_url'] ?? null;
            $this->date_posted = $args['date_posted'] ?? null;
            $this->nar_skill1 = $args['nar_skill1'] ?? null;
            $this->nar_skill2 = $args['nar_skill2'] ?? null;
            $this->nar_skill3 = $args['nar_skill3'] ?? null;
            $this->nar_skill4 = $args['nar_skill4'] ?? null;
            $this->nar_skill5 = $args['nar_skill5'] ?? null;
            $this->nar_tech1 = $args['nar_tech1'] ?? null;
            $this->nar_tech2 = $args['nar_tech2'] ?? null;
            $this->nar_tech3 = $args['nar_tech3'] ?? null;
            $this->nar_tech4 = $args['nar_tech4'] ?? null;
            $this->nar_tech5 = $args['nar_tech5'] ?? null;
            $this->nar_sec1 = $args['nar_sec1'] ?? null;
            $this->nar_sec2 = $args['nar_sec2'] ?? null;
            $this->nar_sec3 = $args['nar_sec3'] ?? null;
            $this->nar_sec4 = $args['nar_sec4'] ?? null;
            $this->nar_sec5 = $args['nar_sec5'] ?? null;
            $this->nar_sec6 = $args['nar_sec6'] ?? null;
            $this->nar_sec1_head = $args['nar_sec1_head'] ?? null;
            $this->nar_sec2_head = $args['nar_sec2_head'] ?? null;
            $this->nar_sec3_head = $args['nar_sec3_head'] ?? null;
            $this->nar_sec4_head = $args['nar_sec4_head'] ?? null;
            $this->nar_sec5_head = $args['nar_sec5_head'] ?? null;
            $this->nar_sec6_head = $args['nar_sec6_head'] ?? null;
            $this->nar_img1_url = $args['nar_img1_url'] ?? null;
            $this->nar_img2_url = $args['nar_img2_url'] ?? null;
            $this->nar_img3_url = $args['nar_img3_url'] ?? null;
            $this->nar_img4_url = $args['nar_img4_url'] ?? null;
            $this->nar_img5_url = $args['nar_img5_url'] ?? null;
            $this->nar_img6_url = $args['nar_img6_url'] ?? null;
            $this->nar_img1_alt = $args['nar_img1_alt'] ?? null;
            $this->nar_img2_alt = $args['nar_img2_alt'] ?? null;
            $this->nar_img3_alt = $args['nar_img3_alt'] ?? null;
            $this->nar_img4_alt = $args['nar_img4_alt'] ?? null;
            $this->nar_img5_alt = $args['nar_img5_alt'] ?? null;
            $this->nar_img6_alt = $args['nar_img6_alt'] ?? null;
            $this->nar_link = $args['nar_link'] ?? null;
            $this->view_order = $args['view_order'] ?? null;
            $this->button_text = $args['button_text'] ?? null;
            }

    }

?>