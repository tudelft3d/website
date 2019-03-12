# docker build -t tudelft3d/website:3.8 .

docker run --rm --volume="$PWD:/srv/jekyll" -it tudelft3d/website:3.8 jekyll build --source . --destination ./_site 
