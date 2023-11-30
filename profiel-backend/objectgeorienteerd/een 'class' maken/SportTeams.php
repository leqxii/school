<?php
    class SportTeams
    {
        private $teams = [];

        public function addTeam($name, $place)
        {
            foreach ($this->teams as $team) {
                if ($team['name'] === $name) {
                    return false;
                }
            }

            $this->teams[] = ['name' => $name, 'place' => $place];
            return true;
        }

        public function removeTeam($name)
        {
            foreach ($this->teams as $key => $team) {
                if ($team['name'] === $name) {
                    unset($this->teams[$key]);
                    return true;
                }
            }

            return false;
        }

        public function getAllTeams()
        {
            return $this->teams;
        }
    }
?>