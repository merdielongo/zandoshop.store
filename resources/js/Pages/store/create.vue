<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import { useForm } from "@inertiajs/vue3";
import InputError from "@/Components/InputError.vue";

defineProps({
    countries: Object,
    cities: Object,
    storeTypes: Object,
    identities: Object
})

const form = useForm({
    name: '',
    type: '',
    store_email: '',
    store_country: '',
    store_city: '',
    store_address: '',
    lastname: '',
    middlename: '',
    firstname: '',
    gender: '',
    birthdate: '',
    birthplace: '',
    email: '',
    phone: '',
    nationality: '',
    country: '',
    city: '',
    identity_type: '',
    identity_number: '',
    address: ''
})

const submit = () => {
    form.post(route('dashboard.stores.store.withOwner'));
};

</script>

<template>
    <head title="Store" />

    <AuthenticatedLayout>
        <template #header>
            <h4 class="font-semibold text-gray-800 leading-tight">Dashboard / Store / Création</h4>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-8">
                <div class="bg-white overflow-hidden shadow sm:rounded-lg p-6">
                    <form @submit.prevent="submit">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <h4 class="font-semibold text-gray-800 leading-tight">Information du store</h4>
                            </div>

                            <div class="col-lg-4 col-md-4 mb-4">
                                <input-label>Nom du store <span class="text-red-600 font-bold">*</span></input-label>
                                <text-input class="w-full mt-2" v-model="form.name"/>
                                <InputError class="mt-2" :message="form.errors.name" />
                            </div>

                            <div class="col-lg-4 col-md-4 mb-4">
                                <input-label>Type de store <span class="text-red-600 font-bold">*</span></input-label>
                                <select class="custom-input w-full mt-2" v-model="form.type">
                                    <option v-for="storeType in storeTypes" :key="storeType.id" :value="storeType.id">
                                        {{ storeType.name }}
                                    </option>
                                </select>
                                <InputError class="mt-2" :message="form.errors.type" />
                            </div>

                            <div class="col-lg-4 col-md-4 mb-4">
                                <input-label>Email</input-label>
                                <text-input class="w-full mt-2" type="email" v-model="form.store_email"/>
                                <InputError class="mt-2" :message="form.errors.store_email" />
                            </div>

                            <div class="col-lg-4 col-md-4 mb-4">
                                <input-label>Pays <span class="text-red-600 font-bold">*</span></input-label>
                                <select class="custom-input w-full mt-2" v-model="form.store_country">
                                    <option v-for="country in countries" :key="country.id" :value="country.name_fr">
                                        {{ country.name_fr }}
                                    </option>
                                </select>
                                <InputError class="mt-2" :message="form.errors.store_country" />
                            </div>

                            <div class="col-lg-4 col-md-4 mb-4">
                                <input-label>Ville</input-label>
                                <select class="custom-input w-full mt-2" v-model="form.store_city">
                                    <option v-for="city in cities" :key="city.id" :value="city.name_fr">
                                        {{ city.name_fr }}
                                    </option>
                                </select>
                                <InputError class="mt-2" :message="form.errors.store_city" />
                            </div>

                            <div class="col-lg-4 col-md-4 mb-4">
                                <input-label>Address <span class="text-red-600 font-bold">*</span></input-label>
                                <text-input class="w-full mt-2" v-model="form.store_address"/>
                                <InputError class="mt-2" :message="form.errors.store_address" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-12 mb-5">
                                <h4 class="font-semibold text-gray-800 leading-tight">Information du manager</h4>
                            </div>
                            <div class="col-lg-4 col-md-4 mb-4">
                                <input-label>Nom <span class="text-red-600 font-bold">*</span></input-label>
                                <text-input class="w-full mt-2" v-model="form.lastname"/>
                                <InputError class="mt-2" :message="form.errors.lastname" />
                            </div>

                            <div class="col-lg-4 col-md-4 mb-4">
                                <input-label>Post-nom</input-label>
                                <text-input class="w-full mt-2" v-model="form.middlename"/>
                                <InputError class="mt-2" :message="form.errors.middlename" />
                            </div>

                            <div class="col-lg-4 col-md-4 mb-4">
                                <input-label>Prénom <span class="text-red-600 font-bold">*</span></input-label>
                                <text-input class="w-full mt-2" v-model="form.firstname"/>
                                <InputError class="mt-2" :message="form.errors.firstname" />
                            </div>

                            <div class="col-lg-4 col-md-4 mb-4">
                                <input-label>Sexe <span class="text-red-600 font-bold">*</span></input-label>
                                <select class="custom-input w-full mt-2" v-model="form.gender">
                                    <option value="M">M</option>
                                    <option value="F">F</option>
                                </select>
                                <InputError class="mt-2" :message="form.errors.gender" />
                            </div>

                            <div class="col-lg-4 col-md-4 mb-4">
                                <input-label>Date de naissance <span class="text-red-600 font-bold">*</span></input-label>
                                <text-input class="w-full mt-2" type="date" v-model="form.birthdate"/>
                                <InputError class="mt-2" :message="form.errors.birthdate" />
                            </div>

                            <div class="col-lg-4 col-md-4 mb-4">
                                <input-label>Lieu de naissance <span class="text-red-600 font-bold">*</span></input-label>
                                <text-input class="w-full mt-2" type="text" v-model="form.birthplace" />
                                <InputError class="mt-2" :message="form.errors.birthplace" />
                            </div>

                            <div class="col-lg-4 col-md-4 mb-4">
                                <input-label>Email <span class="text-red-600 font-bold">*</span></input-label>
                                <text-input class="w-full mt-2" type="email" v-model="form.email" />
                                <InputError class="mt-2" :message="form.errors.email" />
                            </div>

                            <div class="col-lg-4 col-md-4 mb-4">
                                <input-label>Téléphone <span class="text-red-600 font-bold">*</span></input-label>
                                <text-input class="w-full mt-2" v-model="form.phone"/>
                                <InputError class="mt-2" :message="form.errors.phone" />
                            </div>

                            <div class="col-lg-4 col-md-4 mb-4">
                                <input-label>Nationalité <span class="text-red-600 font-bold">*</span></input-label>
                                <text-input class="w-full mt-2" v-model="form.nationality"/>
                                <InputError class="mt-2" :message="form.errors.nationality" />
                            </div>

                            <div class="col-lg-4 col-md-4 mb-4">
                                <input-label>Type de carte d'identité <span class="text-red-600 font-bold">*</span></input-label>
                                <select class="custom-input w-full mt-2" v-model="form.identity_type">
                                    <option v-for="identity in identities" :key="identity.id" :value="identity.id">
                                        {{ identity.name }}
                                    </option>
                                </select>
                                <InputError class="mt-2" :message="form.errors.identity_type" />
                            </div>

                            <div class="col-lg-4 col-md-4 mb-4">
                                <input-label>Numéro de la carte <span class="text-red-600 font-bold">*</span></input-label>
                                <text-input class="w-full mt-2" v-model="form.identity_number"/>
                                <InputError class="mt-2" :message="form.errors.identity_number" />
                            </div>

                            <div class="col-lg-4 col-md-4 mb-4">
                                <input-label>Pays</input-label>
                                <select class="custom-input w-full mt-2" v-model="form.country">
                                    <option v-for="country in countries" :key="country.id" :value="country.name_fr">
                                        {{ country.name_fr }}
                                    </option>
                                </select>
                                <InputError class="mt-2" :message="form.errors.country" />
                            </div>

                            <div class="col-lg-4 col-md-4 mb-4">
                                <input-label>Ville</input-label>
                                <select class="custom-input w-full mt-2" v-model="form.city">
                                    <option v-for="city in cities" :key="city.id" :value="city.name_fr">
                                        {{ city.name_fr }}
                                    </option>
                                </select>
                                <InputError class="mt-2" :message="form.errors.city" />
                            </div>

                            <div class="col-lg-8 col-md-8 mb-4">
                                <input-label>Address</input-label>
                                <text-input class="w-full mt-2" v-model="form.address"/>
                                <InputError class="mt-2" :message="form.errors.address" />
                            </div>

                            <div class="col-12 mb-4">
                                <primary-button
                                    :disabled="form.processing"
                                    :class="{ 'opacity-25': form.processing }">
                                    Enregistré
                                </primary-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </AuthenticatedLayout>
</template>
