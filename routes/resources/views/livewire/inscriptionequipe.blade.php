
                        <div class="flex-auto p-6">

                            <form wire:submit.prevent="store">

                                <div class="mb-4">
                                    <input wire:model.lazy="categorie" type="text"
                                           class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                           placeholder="categorie" name="categorie" aria-label="categorie" aria-describedby="email-addon"
                                           required autofocus />
                                    @error('categorie')
                                        <p class="text-size-sm text-red-500">{{$message}}</p>
                                    @enderror
                                </div>
                                <div >
                                    <label class="block text-sm font-bold text-gray-700" for="user_id">
                                        User
                                    </label>
                                    <select id="user_id" name="user_id" wire:model.lazy="user_id" type="text"
                                            class="form-select form-select-sm appearance-none block w-full px-2 py-1
                                            text-sm font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat
                                            border border-solid border-gray-300 rounded transition ease-in-out m-0
                                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                            aria-label=".form-select-sm example">
                                        <option selected>
                                            Selectionner une equipe
                                        </option>
                                        @foreach ($users as $user)
                                            <option value="{{$user->id}}">{{$user->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="inline-block w-full px-6 py-3 mt-6 mb-2
                                        font-bold text-center text-white uppercase align-middle transition-all
                                        bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85
                                        hover:scale-102 hover:shadow-soft-xs leading-pro text-size-xs
                                        ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25
                                        bg-gradient-dark-gray hover:border-slate-700 hover:bg-slate-700
                                        hover:text-white">
                                        Enregistrer
                                    </button>
                                </div>
                            </form>
                        </div>
                   
