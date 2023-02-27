<script lang="ts" setup>
interface Props {
    totalCards: number
    lastPage: number
    onePerPage: number
}

const props = defineProps<Props>();

const selectPageNation = () => {
    if(currentPage.value < 5){
        availableClickPages.value = [1,2,3,4,5]
    } else if (currentPage.value === props.lastPage) {
        availableClickPages.value = [currentPage.value-4, currentPage.value-3, currentPage.value-2, currentPage.value-1, currentPage.value ]
    } else {
        availableClickPages.value = [currentPage.value-2, currentPage.value-1, currentPage.value,currentPage.value+1,currentPage.value+2]
    }
}

const route = useRoute();
const { page } = route.query;
const currentPage = ref<number>(typeof page === "undefined" ? 1 : Number(page))
const availableClickPages = ref<Array<number>>([])
selectPageNation()

const router = useRouter()
const selectPage = (page: number) => {
    if (page > props.lastPage) return
    router.push(`/?page=${String(page)}`)
    currentPage.value = page
    selectPageNation()
}

const movetToPage = (page: number) => {
    if (page > props.lastPage) return
    currentPage.value = currentPage.value + page
    router.push(`/?page=${String(currentPage.value)}`)
    selectPageNation()
}


</script>

<template>
    <div class="full flex items-center justify-center">
        <div class="font-bold"><span class="text-[#ed6103] text-2xl">{{ props.totalCards }}</span>件</div>
        <div
            v-on:click="movetToPage(-1)"
            class="border px-3 py-2 mx-2 hover:bg-gray-400 cursor-pointer border-gray-500"
        >
            前へ
        </div
>
        <div
            v-for="(item, key) in availableClickPages"
            :key="key"
            class="border border-gray-500 px-3 py-2 mx-2 hover:bg-gray-400 cursor-pointer"
            :class="{ 'bg-[#ed6103] text-white hover:bg-[#ed6103]':  item === currentPage}"
            v-on:click="selectPage(item)"
        >
            {{ item }}
        </div>
        <div class="border px-3 py-2 mx-2 text-gray-400">{{ lastPage }}</div>
        <div
            v-on:click="movetToPage(1)"
            class="border border-gray-500 px-3 py-2 mx-2 hover:bg-gray-400 cursor-pointer"
        >
            次へ
        </div
>
    </div>
</template>
