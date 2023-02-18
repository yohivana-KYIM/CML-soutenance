/**
    * Determine whether the authenticate user can manage other users.
    */
public function manageUsers(User $user)
{
    return $user->isAdmin();
}
