const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    theme: {
        extend: {
            fontFamily: {
                sans: ["Inter var", ...defaultTheme.fontFamily.sans],
            },
            spacing: {
                128: "32rem",
            },
            backgroundImage: {
                "home-page": "url('assets/miamilarga.jpg')",
                "new-services": "url('assets/newservices.jpg')",
            },
        },
    },
    variants: {
        extend: {
            backgroundColor: ["active"],
        },
    },
    purge: {
        content: [
            "./app/**/*.php",
            "./resources/**/*.html",
            "./resources/**/*.js",
            "./resources/**/*.jsx",
            "./resources/**/*.ts",
            "./resources/**/*.tsx",
            "./resources/**/*.php",
            "./resources/**/*.vue",
            "./resources/**/*.twig",
        ],
        options: {
            defaultExtractor: (content) =>
                content.match(/[\w-/.:]+(?<!:)/g) || [],
            whitelistPatterns: [/-active$/, /-enter$/, /-leave-to$/, /show$/],
        },
    },
    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
    ],
};
