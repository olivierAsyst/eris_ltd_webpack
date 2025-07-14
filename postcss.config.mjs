export default {
  content: [
    "./node_modules/flowbite/**/*.js",
  ],
    plugins: {
      "@tailwindcss/postcss": {},
      "flowbite/plugin":{},
    },
    theme: {
      extend: {
        fontFamily: {
          'sans': ['Lato', 'Montserrat', 'sans-serif']
        }
      },
    },

  };