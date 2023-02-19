<div class="px-4">
    <h3 class="uppercase text-3xl font-bold mb-8">
        BIENVENUE DANS LE SYSTEME DU CML(Centre Medical La Life)
    </h3>

    <div wire:init="changeLoading">
        @if ($loading)
        <div class="flex items-center gap-2 text-gray-500 mb-2">
            <span class="h-6 w-6 block rounded-full border-4 border-t-blue-300 animate-spin"></span>
            loading...
        </div>
        @endif
    </div>

    <div>
        <!-- row 1 -->
        <div class="flex flex-wrap -mx-3">
            <!-- card3 -->
            <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                        <div class="flex flex-row -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div>
                                    <p class="mb-0 font-sans font-semibold leading-normal text-size-sm">
                                        New personnels
                                    </p>
                                    <h5 class="mb-0 font-bold">
                                        +
                                        <span class="leading-normal text-red-600 text-size-sm font-weight-bolder">29</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="px-3 text-right basis-1/3">
                                <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-fuchsia">
                                    <i class="ni ni-paper-diploma text-size-lg relative top-3.5 text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- card4 -->
            <div class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:w-1/4">
                <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                        <div class="flex flex-row -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div>
                                    <p class="mb-0 font-sans font-semibold leading-normal text-size-sm">
                                        pointages
                                    </p>
                                    <h5 class="mb-0 font-bold">
                                        1
                                        <span
                                            class="leading-normal text-size-sm font-weight-bolder text-lime-500">
                                            +
                                        </span>
                                    </h5>
                                </div>
                            </div>
                            <div class="px-3 text-right basis-1/3">
                                <div class="w-12 h-12 rounded-lg bg-gradient-fuchsia flex justify-center items-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
{{--                                    <i class="fa fa-clock text-size-lg text-white"></i>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- cards row 2 -->
        <div class="flex flex-wrap mt-4 -mx-3">
            <div class="w-full px-3 mb-6 lg:mb-0 lg:w-7/12 lg:flex-none">
                <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                        <div class="flex flex-wrap -mx-3">
                            <div class="max-w-full px-3 lg:w-1/2 lg:flex-none">
                                <div class="flex flex-col h-full">
                                    <p class="pt-2 mb-1 font-semibold">Built by developers</p>
                                    <h5 class="font-bold">Ivana YOH</h5>
                                    <p class="mb-12">Grace a ce System vous pouvez effectuer Vos Pointages.</p>
                                    <a class="mt-auto mb-0 font-semibold leading-normal text-size-sm group text-slate-500"
                                       href="javascript:;">
                                        Read More
                                        <i
                                            class="fas fa-arrow-right ease-bounce text-size-sm group-hover:translate-x-1.25 ml-1 leading-normal transition-all duration-200"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="max-w-full px-3 mt-12 ml-auto text-center lg:mt-0 lg:w-5/12 lg:flex-none">
                                <div class="h-full bg-gradient-fuchsia rounded-xl">
{{--                                    <img src="{{ asset('assets/img/shapes/waves-white.svg') }}"--}}
{{--                                         class="absolute top-0 hidden w-1/2 h-full lg:block" alt="waves" />--}}
                                    <div class="relative flex items-center justify-center h-full">
                                        <img class="relative z-20 pt-6"
                                             src="{{ asset('assets/img/illustrations/rocket-white.png') }}" alt="rocket" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full max-w-full px-3 lg:w-5/12 lg:flex-none">
                <div
                    class="border-black/12.5 shadow-soft-xl relative flex h-full min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border p-4">
                    <div class="relative h-full overflow-hidden bg-cover rounded-xl"
                         style="background-image: url('../assets/img/ivancik.jpg')">
                        <span
                            class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-dark-gray opacity-80"></span>
                        <div class="relative z-10 flex flex-col flex-auto h-full p-4">
                            <h5 class="pt-2 mb-6 font-bold text-white">
                                {{ trans('Teams') }}
                            </h5>
                            <p class="text-white">
                                {{ trans('Manage your teams') }}
                            </p>
                            <a class="mt-auto mb-0 font-semibold leading-normal text-white group text-size-sm"
                               href="{{ route('equipe-management') }}">
                                /teams
                                <i
                                    class="fas fa-arrow-right ease-bounce text-size-sm group-hover:translate-x-1.25 ml-1 leading-normal transition-all duration-200"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
