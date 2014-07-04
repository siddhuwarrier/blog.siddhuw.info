// # Ghost Configuration
// Setup your Ghost install for various environments
// Documentation can be found at http://docs.ghost.org/usage/configuration/

var path = require('path'),
    config;

config = {
    production: {
        url: 'http://blog.siddhuw.info',
		fileStorage: false,
        mail: {
              transport: 'SMTP',
              options: {
                  service: 'smtp.mandrillapp.com',
                  auth: {
                      user: process.env.MANDRILL_USERNAME, 
                      pass: process.env.MANDRILL_APIKEY
                  }
              }
          },        

        database: {
            client: 'postgres',
            connection: process.env.DATABASE_URL,
			user: process.env.POSTGRES_USER,
          	password: process.env.POSTGRES_PWD,
          	database: process.env.POSTGRES_DB,
          	port: '5432'
        },
        server: {
            host: '0.0.0.0',
            // Port to be passed to node's `net.Server#listen()`, for iisnode set this to `process.env.PORT`
            port: process.env.PORT
        },
        paths: {
            contentPath: path.join(__dirname, '/content/')
        }
    },
};

// Export config
module.exports = config;
