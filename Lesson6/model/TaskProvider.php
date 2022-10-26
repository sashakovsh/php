<?php

require_once 'Task.php';

class TaskProvider
{
    private array $taskList;

    public function __construct()
    {
        $this->taskList = $_SESSION['tasks'] ?? [];
    }

    public function getUndoneList() {
        $tasks = [];
        foreach($this->taskList as $key => $task) {
            if (!$task->isDone()) {
                $tasks[$key] = $task;
            }
        }
        return $tasks;
    }
    public function addTask(Task $task): void {
        $_SESSION['tasks'][] = $task;
        $this->taskList[] = $task;
    }
    public function removeTask(int $key):void {
        unset($_SESSION['tasks'][$key]);
        unset($this->taskList[$key]);
    }
}