<template>
    <div class="w-full h-screen p-4 grid grid-cols-12 grid-rows-12 gap-4">
        <div class="col-span-1 row-span-12 bg-gradient-to-t from-[#1B1515] to-[#282828] rounded-xl">
            <div class="flex flex-col items-center w-full">
                <img :src="iconCMS"  alt="Content Management System" class="mt-6 w-14"/>
                <img :src="iconAnalytics"  alt="Content Management System" class="mt-4 w-14"/>
                <img :src="iconMail"  alt="Content Management System" class="mt-4 w-14"/>
            </div>
        </div>
        <div class="col-span-11 row-span-1 rounded-xl">
            <nav class="w-full h-full">
                <button class="w-2/12 h-full bg-gradient-to-tr from-[#99D2CC] to-[#ECE3F6] flex items-center justify-center rounded-xl text-lg">
                    Send email
                </button>
            </nav>
        </div>
        <div class="col-span-5 row-span-11 bg-gradient-to-tr from-[#1B1515] to-[#282828] bg-green-500 rounded-xl">
            <div class="p-4 border-b border-amber-500">
                <div class="bg-green-500 w-12 h-12 flex items-center justify-center rounded-3xl"> OO </div>
            </div>
        </div>
        <div class="col-span-6 row-span-11 bg-gradient-to-tl from-[#1B1515] to-[#282828] bg-green-500 rounded-xl">

        </div>
    </div>
</template>

<script setup>

import {onMounted} from "vue";

import iconCMS from "../../../../public/images/icon_cms.svg";
import iconAnalytics from "../../../../public/images/icon_analytics.svg";
import iconMail from "../../../../public/images/icon_mail.svg";

onMounted(() => {
    console.log("Hello world");
})

</script>
