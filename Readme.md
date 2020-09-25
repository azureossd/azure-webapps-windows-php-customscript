# Running this sample code

- To install libraries locally `php composer.phar install`
- To run you can use `php -S localhost:8080`

# Deploy App Service Windows
- Use .deployment pointing to deploy.cmd

# Deploy App Service Linux (Legacy Option)

> It is recommended to remove .deployment and [Oryx](https://github.com/microsoft/Oryx/blob/master/doc/runtimes/php.md) will run composer for you. 

- If you want to use this legacy option then modify .deployment with the following content: 

```bash
[config]
command = bash deploy.sh
```