
# Workana-SoftExpert - Laravel Backend and React Frontend

This project combines a Laravel backend and a React frontend within a Docker container.

## Checking Docker Version

Before starting, make sure Docker is installed on your machine and obtain information about the current version.

### Check Docker Version

To check the installed Docker version, execute the following command in the terminal:

```bash
docker --version
```

This command will display the current version of Docker installed on your machine.

## Project Directory Structure:

```
workana-softExpert/
├── backEnd/
│   ├── (Laravel files)
└── front/
    ├── (React files)
```

## Docker Configuration

Ensure that Docker is installed on your machine before getting started.

### Building the Docker Image

To build the Docker image from the Dockerfile, execute the following command in the project's root directory:

```bash
docker build -t workana-softexpert:latest .
```

### Running the Docker Container

After building the image, run the Docker container by mapping port 80 of the container to port 8080 of your local host:

```bash
docker run -p 8080:80 workana-softexpert:latest
```

This will make your application available locally at: [http://localhost:8080](http://localhost:8080)


