public function update()
{
    $this->validate();

    if ($this->picture) {

        $this->validate([
            'picture' => 'mimes:jpg,jpeg,png,bmp,tiff |max:4096',
        ]);

        $currentAvatar = auth()->user()->picture;

        if ($currentAvatar !== 'profile/team-1.jpg' && $currentAvatar !== 'profile/team-2.jpg' && $currentAvatar !== 'profile/team-3.jpg' && !empty($currentAvatar)) {

            unlink(storage_path('app/public/' . $currentAvatar));
            $this->user->update([
                'picture' => $this->picture->store('profile', 'public')
            ]);
        } else {
            $this->user->update([
                'picture' => $this->picture->store('profile', 'public')
            ]);
        }
    }
    $this->user->save();

    return back()->withStatus('Your profile has been successfully updated!');
}
