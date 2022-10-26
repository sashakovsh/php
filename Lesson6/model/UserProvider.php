<?php

require_once 'User.php';

class UserProvider
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function registerUser(User $user, string $plainPassword): bool
    {
       $statement = $this->pdo->prepare(
          'INSERT INTO users (name, username, password) VALUES (:name, :username, :password)'
        );

        if($statement) {
            return $statement->execute([
                'name' => $user->getName(),
                'username' => $user->getUsername(),
                'password' => md5($plainPassword)
            ]);
        } else {
            return false;
        }
    }

    public function getByUserNameAndPassword(string $username, string $password): ?User
    {
        $statement = $this->pdo->prepare(
            'SELECT id, name, username FROM users WHERE username = :username AND password = :password LIMIT 1'
        );

        $statement->execute([
            'username' => $username,
            'password' => md5($password)
        ]);
        return $statement->fetchObject(User::class, [$username]) ?: null;
    }
}