<?php


class TaskService
{
    static function addComment (User $user, Task $task, string $text): void
    {
        $task->setComment(new Comment($user, $task, $text));
    }
}