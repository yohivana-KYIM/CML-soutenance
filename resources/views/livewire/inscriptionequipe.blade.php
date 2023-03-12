<main class="mt-0 transition-all duration-200 ease-soft-in-out">
    <section class="min-h-screen mb-32">
        <div class="relative flex items-start pt-12 pb-56 m-4 overflow-hidden bg-center bg-cover min-h-50-screen rounded-xl"
             style="background-image: url('../assets/img/curved-images/curved14.jpg')">
            <span
                class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-dark-gray opacity-60"></span>
            <div class="container z-10">
                <div class="flex flex-wrap justify-center -mx-3">
                    <div class="w-full max-w-full px-3 mx-auto mt-0 text-center lg:flex-0 shrink-0 lg:w-5/12">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="flex flex-wrap -mx-3 -mt-48 md:-mt-56 lg:-mt-48">
                <div class="w-full max-w-full px-3 mx-auto mt-0 md:flex-0 shrink-0 md:w-7/12 lg:w-5/12 xl:w-4/12">
                    <div
                        class="relative z-0 flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
                        <div class="p-6 mb-0 text-center bg-white border-b-0 rounded-t-2xl">

                        </div>
                        <div class="flex flex-wrap px-3 -mx-3 sm:px-6 xl:px-12">
                            <div class="w-3/12 max-w-full px-1 ml-auto flex-0">

                            </div>
                            <div class="w-3/12 max-w-full px-1 flex-0">

                            </div>
                            <div class="w-3/12 max-w-full px-1 mr-auto flex-0">

                            </div>
                            <div class="relative w-full max-w-full px-3 mt-2 text-center shrink-0">
                                <p
                                    class="z-20 inline px-4 mb-2 font-semibold leading-normal bg-white text-size-sm text-slate-400">
                                    Bienvenue et veuillez ajouter une equipe</p>
                            </div>
                        </div>
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
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
