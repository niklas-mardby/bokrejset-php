<?php

class UserView
{

    public function renderAllUsersAsList(array $users): void
    {
        echo "<ul>";
        foreach ($users as $user) {
            echo "<li>{$user['name']} (id: {$user['id']})</li>";
        }
        echo "</ul>";
    }
}
