<?php

require_once 'Task.php';

class TaskProvider
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getUndoneList(int $userId) {
        $statement = $this->pdo->prepare(
            'SELECT * FROM tasks WHERE user_id = :id'
        );
        $statement->execute([
            'id' => $userId
        ]);
        return $statement->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Task::class);
    }
    public function addTask(Task $task, int $userId): bool {
        $statement = $this->pdo->prepare(
            'INSERT INTO tasks (user_id, description) VALUES (:user_id, :description)'
        );
        return $statement->execute([
            'user_id' => $userId,
            'description' => $task->getDescription()
        ]);
    }
    public function removeTask(int $taskId):bool {
        $statement = $this->pdo->prepare(
            'DELETE FROM tasks WHERE id=:id'
        );
        return $statement->execute([
            'id' => $taskId
        ]);
    }
}