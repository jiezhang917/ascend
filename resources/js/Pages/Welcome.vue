<template>
    <div class="relative bg-primary min-h-screen">
        <!-- welcome page -->
        <div class="mt-36 md:mt-52 lg:mt-32 text-dark-slate-blue" v-if="step === 1">
            <div class="grid grid-cols-12 gap-x-2 lg:gap-x-6">
                <div class="col-span-6 col-start-4 lg:col-span-4 lg:col-start-5 flex justify-center">
                    <svg class="h-auto w-40 md:w-60 lg:w-80" viewBox="0 0 121 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 33.6C0.895431 33.6 0 32.7046 0 31.6V2C0 0.895431 0.895431 0 2 0H4.336C5.44057 0 6.336 0.89543 6.336 2V11.536C6.336 12.6406 7.23143 13.536 8.336 13.536H19.024C20.1286 13.536 21.024 12.6406 21.024 11.536V2C21.024 0.895429 21.9194 0 23.024 0H25.36C26.4646 0 27.36 0.895431 27.36 2V31.6C27.36 32.7046 26.4646 33.6 25.36 33.6H23.024C21.9194 33.6 21.024 32.7046 21.024 31.6V21.392C21.024 20.2874 20.1286 19.392 19.024 19.392H8.336C7.23143 19.392 6.336 20.2874 6.336 21.392V31.6C6.336 32.7046 5.44057 33.6 4.336 33.6H2Z" fill="#FF6363"/>
                        <path d="M38.9306 33.6C37.8261 33.6 36.9306 32.7046 36.9306 31.6V2C36.9306 0.895431 37.8261 0 38.9306 0H58.1146C59.2192 0 60.1146 0.89543 60.1146 2V3.664C60.1146 4.76857 59.2192 5.664 58.1146 5.664H45.2666C44.1621 5.664 43.2666 6.55943 43.2666 7.664V11.392C43.2666 12.4966 44.1621 13.392 45.2666 13.392H56.7706C57.8752 13.392 58.7706 14.2874 58.7706 15.392V17.056C58.7706 18.1606 57.8752 19.056 56.7706 19.056H45.2666C44.1621 19.056 43.2666 19.9514 43.2666 21.056V25.936C43.2666 27.0406 44.1621 27.936 45.2666 27.936H58.2586C59.3632 27.936 60.2586 28.8314 60.2586 29.936V31.6C60.2586 32.7046 59.3632 33.6 58.2586 33.6H38.9306Z" fill="#FF6363"/>
                        <path d="M70.705 33.6C69.6004 33.6 68.705 32.7046 68.705 31.6V2C68.705 0.895431 69.6004 0 70.705 0H73.041C74.1456 0 75.041 0.895431 75.041 2V25.744C75.041 26.8486 75.9364 27.744 77.041 27.744H89.889C90.9936 27.744 91.889 28.6394 91.889 29.744V31.6C91.889 32.7046 90.9936 33.6 89.889 33.6H70.705Z" fill="#FF6363"/>
                        <path d="M115.878 28.8409C116.551 28.1568 117.084 27.3445 117.449 26.4504C117.813 25.5563 118 24.598 118 23.6302C118 22.6625 117.813 21.7042 117.449 20.8101C117.084 19.916 116.551 19.1037 115.878 18.4195L114.483 16.9996L115.878 15.5798C117.236 14.1978 117.999 12.3234 117.999 10.3691C117.999 8.41466 117.236 6.54031 115.878 5.15835C114.52 3.77638 112.678 3 110.758 3C108.837 3 106.995 3.77638 105.637 5.15834L104.241 6.57823L94 16.9996L104.241 27.4211L105.637 28.8409C106.309 29.5254 107.107 30.0684 107.986 30.4389C108.865 30.8093 109.806 31 110.758 31C111.709 31 112.65 30.8093 113.529 30.4389C114.408 30.0684 115.206 29.5254 115.878 28.8409V28.8409Z" stroke="#FF6363" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h1 class="col-span-12 text-xl md:text-4xl lg:text-5xl font-bold mt-6 md:mt-20 lg:mt-11 text-center">
                    Welcome to HELB!
                </h1>
                <p class="col-span-6 col-start-4 md:col-span-8 md:col-start-3 lg:col-span-4 lg:col-start-5
                    text-sm md:text-xl lg:text-2xl mt-2 mg:mt-10 lg:mt-2.5 text-center"
                >
                    We are here to help small business owners like you.
                </p>

                <div class="col-span-10 col-start-2 lg:col-span-6 lg:col-start-4 mt-28 lg:mt-36 text-center">
                    <jet-button @click="goNext"
                        class="app-btn block uppercase text-white font-bold bg-orange
                        text-sm md:text-xl lg:text-2xl
                        w-full md:h-20 lg:h-16 rounded-xl justify-center"
                    >
                        Get Started
                    </jet-button>
                </div>

                <div class="col-span-12 flex justify-center mt-4 md:mt-5 lg:mt-6">
                    <p class="text-xs md:text-base">
                        <span>Already have an account?</span>
                        <inertia-link href="/login" class="underline font-bold">Login</inertia-link>
                    </p>
                </div>
            </div>
        </div>

        <!-- progress bar -->
        <div class="pt-5 pb-7 px-5 grid grid-cols-12" v-if="step !== 1">
            <div class="col-span-1 flex justify-center items-center" @click="goPrev">
                <svg class="h-6 w-auto" viewBox="0 0 396 396" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M207.485 25.5147C212.172 30.201 212.172 37.799 207.485 42.4853L53.8677 196.103L207.588 353.619C212.217 358.362 212.124 365.959 207.381 370.588C202.638 375.217 195.041 375.124 190.412 370.381L28.4119 204.381C23.8229 199.679 23.8688 192.161 28.5147 187.515L190.515 25.5147C195.201 20.8284 202.799 20.8284 207.485 25.5147Z" fill="#FF6363"/>
                </svg>
            </div>

            <div class="col-start-3 col-span-8 flex items-center">
                <div class="w-full">
                    <div class="overflow-hidden h-2 text-xs flex rounded bg-red-100">
                        <div :style="progressStyle" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-red-300"></div>
                    </div>
                </div>
            </div>

            <div class="col-start-12 col-span-1 flex justify-center items-center" v-if="step === 2">
                <svg class="h-6 w-auto" viewBox="0 0 395 395" fill="none" xmlns="http://www.w3.org/2000/svg" @click="showModal = true">
                    <g clip-path="url(#clip0)">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M345.485 50.5147C350.172 55.201 350.172 62.799 345.485 67.4853L201.985 210.985C197.299 215.672 189.701 215.672 185.015 210.985C180.328 206.299 180.328 198.701 185.015 194.015L328.515 50.5147C333.201 45.8284 340.799 45.8284 345.485 50.5147Z" fill="#FF6363"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M309.512 73.0329L362.654 126.624C371.21 135.252 371.151 149.181 362.524 157.736L320.376 199.531C311.673 208.161 297.596 208.015 289.074 199.207L236.777 145.151L309.512 73.0329ZM309.368 106.973L270.51 145.502L304.915 181.064L344.204 142.103L309.368 106.973Z" fill="#FF6363"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M21 223C21 202.013 38.0132 185 59 185H173C193.987 185 211 202.013 211 223V337C211 357.987 193.987 375 173 375H59C38.0132 375 21 357.987 21 337V223ZM59 209C51.268 209 45 215.268 45 223V337C45 344.732 51.268 351 59 351H173C180.732 351 187 344.732 187 337V223C187 215.268 180.732 209 173 209H59Z" fill="#FF6363"/>
                    </g>
                    <defs>
                    <clipPath id="clip0">
                    <rect width="395" height="395" fill="white"/>
                    </clipPath>
                    </defs>
                </svg>
            </div>
        </div>

        <!-- General business info -->
        <div v-if="step === 2">
            <general-info @update:info="updateInfo"
                :business-name="businessName" :business-desc="businessDesc" :business-category="businessCategory">
                <jet-input type="file" name="photos" accept="image/png, image/jpeg" @change="saveFiles"/>
            </general-info>
        </div>

        <!-- Select a theme -->
        <div v-if="step === 3">
            <select-theme :initial-theme="theme" @update:theme="setTheme"/>
        </div>

        <!-- Add donation items -->
        <div v-if="step === 4">
            <add-donation :initial-donations="donations" :initial-account="account" @update:donation="addDonation"/>
        </div>

        <!-- Submit info -->
        <div v-if="step === 5">
            <final-step @submit="submit"/>
        </div>

        <info-modal v-if="showModal" @close="showModal = false"/>
    </div>
</template>

<style scoped>
    .app-btn {
        max-width: 17rem;;
    }
    @media (min-width: 768px) {
        .app-btn {
            max-width: 31rem;;
        }
    }
</style>

<script>
    import JetInput from '@/Jetstream/Input'
    import JetButton from '@/Jetstream/Button';
    import GeneralInfo from '../Components/GeneralInfo';
    import SelectTheme from '../Components/SelectTheme';
    import AddDonation from '../Components/AddDonation';
    import FinalStep from '../Components/FinalStep';
    import InfoModal from '../Components/InfoModal';

    export default {
        props: {
            canLogin: Boolean,
            canRegister: Boolean,
        },
        data() {
            return {
                step: 1,
                businessName: '',
                businessDesc: '',
                businessCategory: '',
                theme: '',
                account: '',
                donations: [
                    {
                        amount: 0,
                        purpose: '',
                    }
                ],
                fileData: null,
                images: null,
                inProgress: false,
                showModal: false,
            }
        },
        computed: {
            progressStyle() {
                return 'width: ' + (this.step -1) * 25 + '%';
            }
        },
        components: {
            JetInput,
            JetButton,
            GeneralInfo,
            SelectTheme,
            AddDonation,
            FinalStep,
            InfoModal,
        },
        methods: {
            goPrev() {
                this.step--;
            },
            goNext() {
                this.step++;
            },
            saveFiles($e) {
                const fileList = $e.target.files;
                const fieldName = $e.target.name;
                if (!fileList.length) return;
                const formData = new FormData();
                Array
                .from(Array(fileList.length).keys())
                .map(x => {
                    formData.append(fieldName, fileList[x], fileList[x].name);
                });
                this.fileData = formData;
            },
            updateInfo(data) {
                this.businessName = data.name;
                this.businessDesc = data.description;
                this.businessCategory = data.category;
                this.goNext();
            },
            setTheme(theme) {
                this.theme = theme;
                this.goNext();
            },
            addDonation(data) {
                this.account = data.account;
                this.donations = data.donations;
                this.goNext();
            },
            submit() {
                this.inProgress = true;
                if (this.fileData) {
                    axios.post('/api/files/upload', this.fileData, {
                        headers: {
                        'Content-Type': 'multipart/form-data'
                        }
                    }).then((response) => {
                        this.images = response.data.image;
                        this.createProfile();
                    }).catch(error => {
                        this.inProgress = false;
                    });
                } else {
                    this.createProfile();
                }
            },
            createProfile() {
                const donations = {
                    account: this.account,
                    donations: this.donations
                };
                axios.post('/api/store/create', {
                    name: this.businessName,
                    description: this.businessDesc,
                    category: this.businessCategory,
                    theme: this.theme,
                    donations: donations,
                    images: this.images,
                }).then((response) => {
                    this.inProgress = false;
                    if (!response.data.success) {
                        alert('Failed to create store');
                        return;
                    }
                    window.location.href = response.data.url;
                }).catch(error => {
                    this.inProgress = false;
                    alert('Something went wrong')
                });
            }
        }
    }
</script>
