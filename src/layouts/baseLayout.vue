<template>
  <div class="bg-gray-100">
    <slot name="app-before" />
    <div id="app-before"></div>
    <div class="flex flex-col min-h-screen">
      <div class="flex flex-col">
        <div class="w-5/6 mx-auto">
          <PageHeader />
        </div>
        <!--   サイドバーとメイン     -->
        <div class="w-1/2 mx-auto">
          <slot />
        </div>
        <div class="w-5/6 py-2 mx-auto mt-8">
            <PageFooter />
        </div>
      </div>
    </div>
    <slot name="app-after" />
    <div id="app-after"></div>
  </div>
</template>
