module.exports = {
  env: {
    browser: true,
    es2020: true
  },
  // extends: ['plugin:vue/essential', 'airbnb-base'],
  extends: ['plugin:vue/essential'],
  parserOptions: {
    ecmaVersion: 11,
    sourceType: 'module'
  },
  plugins: ['vue'],
  rules: {
    semi: ['error', 'never'],
    'comma-dangle': 'off',
    'jsx-quotes': ['error', 'prefer-single'],
    'import/extensions': 'off',
    'arrow-parens': 'off',
    'arrow-body-style': ['error', 'always'],
    'max-len': 'off',
    'import/no-unresolved': 'off',
    'operator-linebreak': 'off'
  }
}
