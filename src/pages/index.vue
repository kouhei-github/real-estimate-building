<script lang="ts" setup>

import BuildingCard from '~/components/BuildingCard.vue'

definePageMeta({
  layout: 'dashboard',
})



</script>

<template>
  <div>
    <div class="w-10/12 mx-auto">
      <FirstView />
      <div class="my-5">
        <span class="text-orange-500 text-3xl font-extrabold">39,556</span><span class="text-orange-500 text-sm">件</span> 1～40件を表示
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
    </div>

  </div>
</template>
