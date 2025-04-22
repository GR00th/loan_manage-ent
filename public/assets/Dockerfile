FROM node:14

WORKDIR /code

<<<<<<< HEAD
COPY ../../package.json /code/package.json
COPY ../../package-lock.json /code/package-lock.json

RUN npm install

COPY ../../ /code
=======
COPY package.json /code/package.json
COPY package-lock.json /code/package-lock.json

RUN npm install

COPY . /code
>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0

CMD ["npm", "run", "dev"]
