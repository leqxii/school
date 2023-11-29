<?php
    class Counter
    {
        private $count = 0;

        public function increment()
        {
            return ++$this->count;
        }
    }

    $counterObject = new Counter();
    $resultaat = $counterObject->increment();
?>

<html>
    <body>
        <?php echo $resultaat; ?>
    </body>
</html>