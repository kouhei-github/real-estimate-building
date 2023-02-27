import { defineConfig } from 'windicss/helpers'
import type { Plugin } from 'windicss/types/interfaces'

// colors
import colors from 'windicss/colors'

// plugins
import TypographyPlugin from 'windicss/plugin/typography'
import AspectRatioPlugin from 'windicss/plugin/aspect-ratio'
import FiltersPlugin from 'windicss/plugin/filters'

const MyTheme = {
  colors: {
    green: '#00a99d',
  },
}

export default defineConfig({
  darkMode: 'class',
  attributify: false,
  extract: {
    include: [
      './components/**/*.{vue,js}',
      './composables/**/*.{js,ts}',
      './layouts/**/*.vue',
      './pages/**/*.vue',
      './plugins/**/*.{js,ts}',
      './utils/**/*.{js,ts}',
      './app.vue',
    ],
  },
  theme: {
    extend: {
      maxWidth: {
        '8xl': '90rem',
      },
      colors: {
        primary: MyTheme.colors.green,
        green: MyTheme.colors.green,
        slate: colors.slate,
        grey: colors.gray,
        red: colors.red,
        blue: colors.blue,
        yellow: colors.yellow,
      },
    },
  },
  shortcuts: {
    'light-img': 'block dark:hidden',
    'dark-img': 'hidden dark:block',
  },
  plugins: [
    require('windicss/plugin/forms'),
    // filters plugin require for navbar blur
    FiltersPlugin as Plugin,
    TypographyPlugin as Plugin,
    AspectRatioPlugin as Plugin,
  ] as Plugin[],
})
