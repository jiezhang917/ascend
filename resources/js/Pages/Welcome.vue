<template>
    <div class="relative bg-primary min-h-screen">
        <!-- welcome page -->
        <div class="flex items-center justify-center min-h-screen" v-if="step === 1">
            <div>
                <div class="flex justify-center pt-8">
                    <svg viewBox="0 0 121 34" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <path d="M2 33.6C0.895431 33.6 0 32.7046 0 31.6V2C0 0.895431 0.895431 0 2 0H4.336C5.44057 0 6.336 0.89543 6.336 2V11.536C6.336 12.6406 7.23143 13.536 8.336 13.536H19.024C20.1286 13.536 21.024 12.6406 21.024 11.536V2C21.024 0.895429 21.9194 0 23.024 0H25.36C26.4646 0 27.36 0.895431 27.36 2V31.6C27.36 32.7046 26.4646 33.6 25.36 33.6H23.024C21.9194 33.6 21.024 32.7046 21.024 31.6V21.392C21.024 20.2874 20.1286 19.392 19.024 19.392H8.336C7.23143 19.392 6.336 20.2874 6.336 21.392V31.6C6.336 32.7046 5.44057 33.6 4.336 33.6H2Z" fill="#FF6363"/>
                        <path d="M38.9306 33.6C37.8261 33.6 36.9306 32.7046 36.9306 31.6V2C36.9306 0.895431 37.8261 0 38.9306 0H58.1146C59.2192 0 60.1146 0.89543 60.1146 2V3.664C60.1146 4.76857 59.2192 5.664 58.1146 5.664H45.2666C44.1621 5.664 43.2666 6.55943 43.2666 7.664V11.392C43.2666 12.4966 44.1621 13.392 45.2666 13.392H56.7706C57.8752 13.392 58.7706 14.2874 58.7706 15.392V17.056C58.7706 18.1606 57.8752 19.056 56.7706 19.056H45.2666C44.1621 19.056 43.2666 19.9514 43.2666 21.056V25.936C43.2666 27.0406 44.1621 27.936 45.2666 27.936H58.2586C59.3632 27.936 60.2586 28.8314 60.2586 29.936V31.6C60.2586 32.7046 59.3632 33.6 58.2586 33.6H38.9306Z" fill="#FF6363"/>
                        <path d="M70.705 33.6C69.6004 33.6 68.705 32.7046 68.705 31.6V2C68.705 0.895431 69.6004 0 70.705 0H73.041C74.1456 0 75.041 0.895431 75.041 2V25.744C75.041 26.8486 75.9364 27.744 77.041 27.744H89.889C90.9936 27.744 91.889 28.6394 91.889 29.744V31.6C91.889 32.7046 90.9936 33.6 89.889 33.6H70.705Z" fill="#FF6363"/>
                        <path d="M115.878 28.8409C116.551 28.1568 117.084 27.3445 117.449 26.4504C117.813 25.5563 118 24.598 118 23.6302C118 22.6625 117.813 21.7042 117.449 20.8101C117.084 19.916 116.551 19.1037 115.878 18.4195L114.483 16.9996L115.878 15.5798C117.236 14.1978 117.999 12.3234 117.999 10.3691C117.999 8.41466 117.236 6.54031 115.878 5.15835C114.52 3.77638 112.678 3 110.758 3C108.837 3 106.995 3.77638 105.637 5.15834L104.241 6.57823L94 16.9996L104.241 27.4211L105.637 28.8409C106.309 29.5254 107.107 30.0684 107.986 30.4389C108.865 30.8093 109.806 31 110.758 31C111.709 31 112.65 30.8093 113.529 30.4389C114.408 30.0684 115.206 29.5254 115.878 28.8409V28.8409Z" stroke="#FF6363" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>

                <div class="text-center mt-6 text-dark-slate-blue">
                    <h1 class="text-xl font-bold">Welcome to HELB</h1>
                    <p class="text-sm mt-2">We are here to help small business owners like you.</p>
                </div>

                <div class="flex justify-center mt-24">
                    <div class="w-80">
                        <jet-button @click="goNext"
                            class="block uppercase text-white text-sm font-bold bg-orange w-full py-3 rounded-xl mb-7 justify-center">
                            Get Started
                        </jet-button>
                        <div class="flex justify-center">
                            <p class="text-dark-slate-blue text-xs">
                                <span>Already have an account? </span>
                                <inertia-link href="/login" class="underline">Login</inertia-link>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- progress bar -->
        <div class="pt-5 pb-7" v-if="step !== 1">
            <div class="flex justify-center">
                <div class="w-3/4">
                    <div class="overflow-hidden h-2 text-xs flex rounded bg-red-100">
                        <div :style="progressStyle" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-red-300"></div>
                    </div>
                </div>
            </div>

            <div class="float-right -mt-3 pr-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-auto h-6">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                </svg>
            </div>
        </div>

        <!-- General business info -->
        <div v-if="step === 2">
            <general-info @go-prev="goPrev" @update:info="updateInfo"
                :business-name="businessName" :business-desc="businessDesc" :business-category="businessCategory">
                <jet-input type="file" name="photos" accept="image/png, image/jpeg" @change="saveFiles"/>
            </general-info>
        </div>

        <!-- Select a theme -->
        <div v-if="step === 3">
            <select-theme :initial-theme="theme" @go-prev="goPrev" @update:theme="setTheme"/>
        </div>

        <!-- Add donation items -->
        <div v-if="step === 4">
            <add-donation :donation="donation" @go-prev="goPrev" @update:donation="addDonation"/>
        </div>

        <!-- Submit info -->
        <div v-if="step === 5">
            <final-step @submit="submit"/>
        </div>
    </div>
</template>

<style scoped>
    .bg-gray-100 {
        background-color: #f7fafc;
        background-color: rgba(247, 250, 252, var(--tw-bg-opacity));
    }

    .border-gray-200 {
        border-color: #edf2f7;
        border-color: rgba(237, 242, 247, var(--tw-border-opacity));
    }

    .text-gray-400 {
        color: #cbd5e0;
        color: rgba(203, 213, 224, var(--tw-text-opacity));
    }

    .text-gray-500 {
        color: #a0aec0;
        color: rgba(160, 174, 192, var(--tw-text-opacity));
    }

    .text-gray-600 {
        color: #718096;
        color: rgba(113, 128, 150, var(--tw-text-opacity));
    }

    .text-gray-700 {
        color: #4a5568;
        color: rgba(74, 85, 104, var(--tw-text-opacity));
    }

    .text-gray-900 {
        color: #1a202c;
        color: rgba(26, 32, 44, var(--tw-text-opacity));
    }

    @media (prefers-color-scheme: dark) {
        .dark\:bg-gray-800 {
            background-color: #2d3748;
            background-color: rgba(45, 55, 72, var(--tw-bg-opacity));
        }

        .dark\:bg-gray-900 {
            background-color: #1a202c;
            background-color: rgba(26, 32, 44, var(--tw-bg-opacity));
        }

        .dark\:border-gray-700 {
            border-color: #4a5568;
            border-color: rgba(74, 85, 104, var(--tw-border-opacity));
        }

        .dark\:text-white {
            color: #fff;
            color: rgba(255, 255, 255, var(--tw-text-opacity));
        }

        .dark\:text-gray-400 {
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--tw-text-opacity));
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
                donation: {},
                fileData: null,
                inProgress: false,
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
                this.donations = [data];
                this.goNext();
            },
            submit() {
                this.inProgress = true;
                axios.post('/api/files/upload', this.fileData, {
                    headers: {
                    'Content-Type': 'multipart/form-data'
                    }
                }).then((response) => {
                    const img = response.data.image;
                    axios.post('/api/store/create', {
                        name: this.businessName,
                        description: this.businessDesc,
                        category: this.businessCategory,
                        theme: this.theme,
                        donations: this.donations,
                        images: [img],
                    }).then((response) => {
                        this.inProgress = false;
                        window.location.href = response.data.url;
                    }).catch(error => {
                        this.inProgress = false;
                        // todo: alert
                    });
                }).catch(error => {
                    this.inProgress = false;
                });
            }
        }
    }
</script>
