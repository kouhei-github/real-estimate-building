<script lang="ts" setup>

import BuildingCard from '~/components/BuildingCard.vue'

definePageMeta({
  layout: 'dashboard',
})

type PageNation = {
    total     : number
    lastPage  : number
    onePerPage: number
}

const pageNations = reactive<PageNation>({
    total: 0,
    onePerPage: 0,
    lastPage: 0,
})

onMounted(() => {
    pageNations.total      = 2832
    pageNations.onePerPage = 10
    pageNations.lastPage   = Math.ceil(pageNations.total / pageNations.onePerPage)
})

</script>

<template>
  <div>
    <div class="w-10/12 mx-auto">
      <FirstView />
      <div class="my-5">
        <span class="text-orange-500 text-3xl font-extrabold">{{ pageNations.total }}</span><span class="text-orange-500 text-sm">件</span> {{ `1～${pageNations.onePerPage}件を表示` }}
      </div>

      <div class="space-y-[50px]">
        <BuildingCard url="/about" building-name="マリオン川口第２ 西川口駅" />
        <BuildingCard url="/about" building-name="マリオン川口第２ 西川口駅" />
        <BuildingCard url="/about" building-name="マリオン川口第２ 西川口駅" />
        <BuildingCard url="/about" building-name="マリオン川口第２ 西川口駅" />
        <BuildingCard url="/about" building-name="マリオン川口第２ 西川口駅" />
        <BuildingCard url="/about" building-name="マリオン川口第２ 西川口駅" />
        <BuildingCard url="/about" building-name="マリオン川口第２ 西川口駅" />
        <BuildingCard url="/about" building-name="マリオン川口第２ 西川口駅" />
        <BuildingCard url="/about" building-name="マリオン川口第２ 西川口駅" />
        <BuildingCard url="/about" building-name="マリオン川口第２ 西川口駅" />
      </div>
      <div class="w-w-full ml-auto">
        <PageNation
          :totalCards="pageNations.total"
          :onePerPage="pageNations.onePerPage"
          :lastPage="pageNations.lastPage"
        />
      </div>

    </div>

  </div>
</template>
