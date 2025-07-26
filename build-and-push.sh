#!/bin/bash

# Build the web application image
docker build -t yourusername/php-twitter-app:latest ./php-sample-application

# Push to Docker Hub (login required: docker login)
docker push yourusername/php-twitter-app:latest

echo "Image built and pushed successfully!"
echo "Replace 'yourusername' with your actual Docker Hub username"