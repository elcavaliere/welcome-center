const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    theme: {
        extend: {
            textColor: {
                skin: {
                    'dark-blue': `var(--color-dark-blue)`,
                    'light-blue': `var(--color-light-blue)`,
                    'dark-orange': `var(--color-dark-orange)`,
                    'light-orange': `var(--color-light-orange)`,
                    'light-orange-secondary': `var(--color-light-orange-secondary)`,
                    'light-gray': `var(--color-light-gray)`,
                    'gray-bg': `var(--color-gray-bg)`,
                }
            },
            backgroundColor: {
                skin: {
                    'dark-blue': `var(--color-dark-blue)`,
                    'light-blue': `var(--color-light-blue)`,
                    'dark-orange': `var(--color-dark-orange)`,
                    'light-orange': `var(--color-light-orange)`,
                    'light-orange-secondary': `var(--color-light-orange-secondary)`,
                    'light-gray': `var(--color-light-gray)`,
                    'gray-bg': `var(--color-gray-bg)`,
                }
            }
        },
    },
    variants: {
        extend: {
            backgroundColor: ['active'],
        }
    },
    purge: {
        content: [
            './app/**/*.php',
            './resources/**/*.html',
            './resources/**/*.js',
            './resources/**/*.jsx',
            './resources/**/*.ts',
            './resources/**/*.tsx',
            './resources/**/*.php',
            './resources/**/*.vue',
            './resources/**/*.twig',
        ],
        options: {
            defaultExtractor: (content) => content.match(/[\w-/.:]+(?<!:)/g) || [],
            whitelistPatterns: [/-active$/, /-enter$/, /-leave-to$/, /show$/],
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
};
