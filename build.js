import { build } from 'vite';

// libraries
const libraries = [
  {
    entry: './assets/admin/entry.ts',
    name: 'admin',
    fileName: 'admin',
  },
  {
    entry: './assets/public/entry.ts',
    name: 'public',
    fileName: 'public',
  },
];

// build
libraries.forEach(async (libItem) => {
  await build({
    configFile: false,
    build: {
      lib: libItem,
      emptyOutDir: false,
      rollupOptions: {
        output: {
          assetFileNames: (assetInfo) => {
            if (assetInfo.name === 'style.css') return `${libItem.fileName}.css`;
            return assetInfo.name;
          },
        },
      },
    },
  });
});
