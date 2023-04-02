
                        <div class="flex-auto p-6">

                            <form wire:submit.prevent="store">

                                <div class="mb-4">
                                    <input wire:model.lazy="nom" type="text"
                                        class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                        placeholder="categorie" name="nom" aria-label="categorie" aria-describedby="email-addon"
                                        required autofocus />
                                    @error('nom')
                                    <p class="text-size-sm text-red-500">{{$message }}</p>
                                    @enderror
                                </div>
                                <div >
                                    <label class="block text-sm font-bold text-gray-700" for="">role</label>

                                    <select name="role-id" wire:model.lazy="role-id" type="text"class="form-select form-select-sm
                                    appearance-none
                                    block
                                    w-full
                                    px-2
                                    py-1
                                    text-sm
                                    font-normal
                                    text-gray-700
                                    bg-white bg-clip-padding bg-no-repeat
                                    border border-solid border-gray-300
                                    rounded
                                    transition
                                    ease-in-out
                                    m-0
                                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label=".form-select-sm example">
                                        <option selected>Selectionner un role</option>
                                        @foreach ($roles as  $role){
                                            <option value="{{$role->id }}">{{$role->nom }}</option>

                                            }
                                      @endforeach


                                    </select>


                                </div>




                                <div class="min-h-6 pl-6.92-em mb-0.5 block">
                                    <input id="terms"
                                        class="w-4.92-em h-4.92-em ease-soft -ml-6.92-em rounded-1.4 checked:bg-gradient-dark-gray after:text-size-fa-check after:font-awesome after:duration-250 after:ease-soft-in-out duration-250 relative float-left mt-1 cursor-pointer appearance-none border border-solid border-slate-200 bg-white bg-contain bg-center bg-no-repeat align-top transition-all after:absolute after:flex after:h-full after:w-full after:items-center after:justify-center after:text-white after:opacity-0 after:transition-all after:content-['\f00c'] checked:border-0 checked:border-transparent checked:bg-transparent checked:after:opacity-100"
                                        type="checkbox" value="" required>
                                    <label
                                        class="mb-2 ml-1 font-normal cursor-pointer select-none text-size-sm text-slate-700"
                                        for="terms"> I agree the <a href="javascript:;"
                                            class="font-bold text-slate-700">Terms and Conditions</a> </label>
                                </div>

                                <div class="text-center">
                                    <button type="submit"
                                        class="inline-block w-full px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-size-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-dark-gray hover:border-slate-700 hover:bg-slate-700 hover:text-white">
                                        enregistrer</button>
                                </div>

                            </form>
                        </div>
                 