 # .bash_profile

cd src/.output/public
find . -name "*.html" | xargs sed -i.bk -e 's/\/_nuxt/.\/_nuxt/g'
echo "done" ;
