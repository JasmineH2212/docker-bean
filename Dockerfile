# Use the official Node.js image as the base image
FROM node:20

# Set the working directory in the container
WORKDIR /usr/src/app

# Copy the application code to the working directory
COPY . .

# Expose the port the app runs on (if needed)
EXPOSE 3000

# Define the command to run your Node.js script
CMD ["node", "index.js"]
