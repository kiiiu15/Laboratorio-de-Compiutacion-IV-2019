<?php namespace repository;

    use model\User as User;

interface IRepository {

    function Add(User $user);
    function getAll();
    function Delete(User $user);

}