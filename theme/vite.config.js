import { defineConfig } from 'vite'
import { resolve, dirname } from 'path'
import { fileURLToPath } from 'url'

const __dirname = dirname(fileURLToPath(import.meta.url))

export default defineConfig({
  root: resolve(__dirname, 'src'),
  css: {
    preprocessorOptions: {
      scss: {
        api: 'modern-compiler',
      },
    },
  },
  build: {
    outDir: resolve(__dirname, '.'),
    emptyOutDir: false,
    rollupOptions: {
      input: {
        style: resolve(__dirname, 'src/main.scss'),
        main:  resolve(__dirname, 'src/main.js'),
      },
      output: {
        assetFileNames: (assetInfo) => {
          const name = assetInfo.names?.[0] ?? ''
          if (name.endsWith('.css')) {
            return 'assets/css/style[extname]'
          }
          return 'assets/[name][extname]'
        },
        entryFileNames: 'assets/js/[name].js',
      },
    },
  },
})
