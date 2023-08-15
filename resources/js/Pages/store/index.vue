<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard / Stores</h2>
        </template>

        <div class="py-12">

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="grid grid-cols-4 gap-4">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                            Stores <br>
                            <b>10k</b>
                        </div>
                    </div>

                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                            Commandes  <br>
                            <b>31k</b>
                        </div>
                    </div>

                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                            Articles  <br>
                            <b>50k</b>
                        </div>
                    </div>

                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                            Utilisateurs  <br>
                            <b>120k</b>
                        </div>
                    </div>
                </div>
            </div>

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <div class="grid grid-cols-4 gap-4">
                        <a href="#" class="bg-gray-900 text-white p-6 rounded-lg text-center uppercase text-[13px]">Ajouter un store</a>
                        <a href="#" class="bg-gray-900 text-white p-6 rounded-lg text-center uppercase text-[13px]">Créer un utilisateur</a>
                        <a href="#" class="bg-gray-900 text-white p-6 rounded-lg text-center uppercase text-[13px]">Voir la liste de licenses</a>
                        <a href="#" class="bg-gray-900 text-white p-6 rounded-lg text-center uppercase text-[13px]">Lancer une publiciter</a>
                        <a href="#" class="bg-gray-900 text-white p-6 rounded-lg text-center uppercase text-[13px]">Voir le compte de paiements</a>
                        <a href="#" class="bg-gray-900 text-white p-6 rounded-lg text-center uppercase text-[13px]">Voir la liste de demandes</a>
                        <a href="#" class="bg-gray-900 text-white p-6 rounded-lg text-center uppercase text-[13px]">Afficher les livraisons</a>
                        <a href="#" class="bg-gray-900 text-white p-6 rounded-lg text-center uppercase text-[13px]">Configuration zandoshop</a>
                    </div>
                </div>
            </div>
        </div>

    </AuthenticatedLayout>
</template>
