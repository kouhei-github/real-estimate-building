<template>
  <div class="bg-gray-100">
    <slot name="app-before" />
    <div id="app-before"></div>
    <div class="flex flex-col min-h-screen">
      <div class="flex flex-col">
        <div class="w-full mx-auto">
          <PageHeader />
        </div>
        <!--   サイドバーとメイン     -->
        <div class="flex w-5/6 mx-auto">
          <div class="w-1/4 mx-auto">
            <PageSidebar />
          </div>
          <div class="w-3/4 mx-auto">
            <slot />
          </div>
        </div>
        <div class="w-full py-3 mx-auto mt-8">
            <PageFooter />
        </div>
      </div>
    </div>
    <slot name="app-after" />
    <div id="app-after"></div>
  </div>
</template>
