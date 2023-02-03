<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>

                <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab"
                        data-tabs-toggle="#myTabContent" role="tablist">
                        <li class="mr-2" role="presentation">
                            <button
                                class="inline-block p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-500 dark:border-blue-500"
                                id="profile-tab" data-tabs-target="#profile" type="button" role="tab"
                                aria-controls="profile" aria-selected="true">Profile</button>
                        </li>
                        <li class="mr-2" role="presentation">
                            <button
                                class="inline-block p-4 text-gray-500 border-b-2 border-transparent border-gray-100 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent dark:text-gray-400 dark:border-gray-700"
                                id="settings-tab" data-tabs-target="#settings" type="button" role="tab"
                                aria-controls="settings" aria-selected="false">Tugas</button>
                        </li>
                        <li role="presentation">
                            <button
                                class="inline-block p-4 text-gray-500 border-b-2 border-transparent border-gray-100 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent dark:text-gray-400 dark:border-gray-700"
                                id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab"
                                aria-controls="contacts" aria-selected="false">Contacts</button>
                        </li>
                    </ul>
                </div>
                <div id="myTabContent">
                    <div class="p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="profile" role="tabpanel"
                        aria-labelledby="profile-tab">
                        <div class="container mx-auto p-6">
                            <div class="flex items-center">
                              <img src="./assets/cem profil.jpg" alt="Profil" class="w-32 h-32 rounded-full">
                              <div class="ml-4">
                                <h2 class="text-2xl font-medium">Campaka Sepul Awalansyah</h2>
                                <p class="text-gray-700">20200040043</p>
                              </div>
                            </div>
                            <div class="mt-4">
                              <p class="text-gray-700">Mahasiswa Aktif Semester 5, Teknik Informatika di Universitas Nusa Putra</p>
                            </div>
                            <div class="mt-6">
                              <div class="flex">
                                <div class="w-1/3">
                                  <p class="text-gray-700 font-medium">Lokasi</p>
                                  <p class="text-gray-600">Sukabumi</p>
                                </div>
                                <div class="w-1/3">
                                  <p class="text-gray-700 font-medium">Jurusan</p>
                                  <p class="text-gray-600">Teknik Informatika</p>
                                </div>
                                <div class="w-1/3">
                                  <p class="text-gray-700 font-medium">Kelas</p>
                                  <p class="text-gray-600">TI20A</p>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="settings" role="tabpanel"
                        aria-labelledby="settings-tab">
                        <div class="container mx-auto p-6">
                            <h2 class="text-2xl font-medium mb-4">Kriteria Tugas</h2>
                            <p>
                                1. Convert tugas UTS menjadi Project Laravel
                                <p>2. Buat Simple CMS, minimal ada 2 Section yang bisa dirubah</p>
                                
                                <p>Ada admin Login</p>
                                
                                <p>2 Module CRUD</p>
                                
                                <p>3. Upload semua project ke GIT berikut databasesnya</p>
                                
                                <p>4. Demokan kedalam bentuk presentasi video (Screen Cast)</p>
                                
                                <p>- Halaman Website</p>
                                
                                <p>- Login Admin</p>
                                
                                <p>- Tunjukan modul yang bisa dirubahnya</p>
                                
                                <p>- Tunjukan Code yang bersangkutan</p>
                            </p>
                          </div>
                    </div>
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="contacts" role="tabpanel"
                        aria-labelledby="contacts-tab">
                        <div class="container mx-auto p-6">
                            <h2 class="text-2xl font-medium mb-4">Hubungi Kami</h2>
                            <form>
                              <div class="mb-4">
                                <label class="block text-gray-700 font-medium mb-2" for="nama">
                                  Nama
                                </label>
                                <input class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal" id="nama" type="text">
                              </div>
                              <div class="mb-4">
                                <label class="block text-gray-700 font-medium mb-2" for="email">
                                  Email
                                </label>
                                <input class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal" id="email" type="email">
                              </div>
                              <div class="mb-4">
                                <label class="block text-gray-700 font-medium mb-2" for="pesan">
                                  Pesan
                                </label>
                                <textarea class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal" id="pesan"></textarea>
                              </div>
                              <button class="bg-indigo-500 hover:bg-indigo-700 text-white font-medium py-2 px-4 rounded-lg">
                                Kirim Pesan
                              </button>
                            </form>
                          </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
</x-app-layout>