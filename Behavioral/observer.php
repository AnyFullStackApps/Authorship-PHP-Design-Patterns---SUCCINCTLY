<?php
/**
 * Created by PhpStorm.
 * User: anyapps
 * Date: 02.11.2018
 * Time: 17:46
 */

//PURPOSE:  Let to know all observer about changing the state

class RSSObserver implements SplObserver {
    public function update(SplSubject $subject) {
        echo "Info RSS about new entry<br>";
    }
}

class NewsletterObserver implements SplObserver {
    public function update(SplSubject $subject) {
        echo "Send email about new entry<br>";
    }
}

class News implements SplSubject {
    private $observers = [];

    public function attach(SplObserver $observer) {
        $this->observers[spl_object_hash($observer)] = $observer;
    }

    public function detach(SplObserver $observer) {
        unset($this->observers[spl_object_hash($observer)]);
    }

    public function notify() {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function add() {
        echo 'News was created so sending notify to observers<br>';
        $this->notify();
    }
}