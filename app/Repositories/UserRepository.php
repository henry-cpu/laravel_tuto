<?php


namespace App\Repositories;


use App\User;

class UserRepository
{
    protected $user;

    public function __construct(User $user){
        $this->user = $user;
    }

    /**
     * @param User $user
     * @param array $inputs
     */
    private function save(User $user, Array $inputs){
        $user->fill($inputs);

        $user->save();

    }

    public function setAdmin(User $user, bool $is_admin)
    {
        $user->admin = $is_admin;

        $user->save();
    }

    public function getPaginate($n) {
        return $this->user->paginate($n);
    }

    public function store(Array $inputs) {
        $user = new $this->user;

        $this->save($user, $inputs);

        return $user;
    }

    public function getById($id) {
        return $this->user->findOrFail($id);
    }

    public function update($id, Array $inputs){
        $this->save($this->getById($id), $inputs);
    }

    public function destroy($id) {
        $this->getById($id)->delete();
        //$this->user->findOrFail($id)->delete()
;    }
}