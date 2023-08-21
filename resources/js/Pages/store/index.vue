<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import { Head, Link } from '@inertiajs/vue3';
    import {nextTick, ref} from "vue";
    import InputError from "@/Components/InputError.vue";
    import InputLabel from "@/Components/InputLabel.vue";
    import DangerButton from "@/Components/DangerButton.vue";
    import Modal from "@/Components/Modal.vue";
    import TextInput from "@/Components/TextInput.vue";
    import SecondaryButton from "@/Components/SecondaryButton.vue";
    import PrimaryButton from "@/Components/PrimaryButton.vue";

    const addCategoryStoreModal = ref(false);

    const showCreateCategoryStore = () => {
        addCategoryStoreModal.value = true;
    };
    const closeCreateCategoryStore = () => {
        addCategoryStoreModal.value = false;
    };

    defineProps({stores: Object})

</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h4 class="font-semibold text-gray-800 leading-tight">Dashboard / Stores</h4>
        </template>

        <div class="py-12">

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <div class="grid grid-cols-4 gap-4">
                        <Link :href="route('dashboard.stores.create')" class="bg-blue-900 text-white p-3 rounded-lg text-center uppercase text-[13px]">Créer un de store</Link>
                        <button @click="showCreateCategoryStore" class="bg-blue-900 text-white p-3 rounded-lg text-center uppercase text-[13px]">Ajouter une categorie de store</button>
                    </div>

                    <div class="grid mt-5">

                        <div class="relative overflow-x-auto">

                            <div v-if="$page.props.flash.message"
                                class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
                                role="alert">
                                <span class="font-medium">
                                    {{ $page.props.flash.message }}
                                </span>
                            </div>

                            <table class="w-full text-sm text-left text-gray-500">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Store name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Category
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Owner
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Status
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Action
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                    <template v-for="store in stores" :key="store.id">
                                        <tr class="bg-white border-b">
                                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                                {{ store.name }}
                                            </th>
                                            <td class="px-6 py-4">
                                                {{ store.store_type.name }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ store.owner.firstname }}
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="bg-green-600 p-2 text-white rounded-lg text-[12px]">
                                                    {{ store.status }}
                                                </span>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="bg-blue-900 p-2 text-white rounded text-[13px]">
                                                    Modifier
                                                </span>
                                                <span class="bg-red-600 p-2 text-white rounded ms-2 text-[13px]">
                                                    Supprimer
                                                </span>
                                            </td>
                                        </tr>
                                    </template>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <Modal :show="addCategoryStoreModal" @close="closeCreateCategoryStore">
            <div class="p-6">
                <h2 class="text-lg font-medium text-gray-900">
                    Créer une nouvelle categorie
                </h2>

                <div class="mt-6">
                    <InputLabel for="password" value="Password" class="sr-only" />

                    <TextInput
                        id="category"
                        ref="categoryInput"
                        type="text"
                        class="mt-1 block w-full"
                        placeholder="Nom de la categorie"
                    />

                    <InputError :message="''" class="mt-2" />
                </div>

                <div class="mt-6 flex justify-end">
                    <SecondaryButton @click="closeCreateCategoryStore"> Cancel </SecondaryButton>

                    <PrimaryButton class="ml-3">Enregistrer</PrimaryButton>
<!--                    <DangerButton-->
<!--                        class="ml-3"-->
<!--                        :class="{ 'opacity-25': form.processing }"-->
<!--                        :disabled="form.processing"-->
<!--                        @click="deleteUser"-->
<!--                    >-->
<!--                        Delete Account-->
<!--                    </DangerButton>-->
                </div>
            </div>
        </Modal>

    </AuthenticatedLayout>
</template>

