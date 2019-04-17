
In order to run the application, kindly follow the below steps:

1) Extract the ZIP file. You will find two projects, Servers and Clients.

2) In order to run the Servers and Clients in parallel, kindly follow the below instructions:
    a) Go to the root directory of Servers and execute './gradlew runParallelTasks' to run both the REST and SOAP servers in parallel instances.
    b) Go to the root directory of Clients and execute './gradlew runParallelTasks' to run both the REST and SOAP clients in parallel instances.
    
3) In order to run the Servers and Clients in separately/sequentially, kindly follow the below  instructions:
    a) Go to the root directory of Servers and execute 'gradle task runSOAPServer' to run SOAP server.
    b) Go to the root directory of Servers and execute 'gradle task runRESTServer' to run REST server.
    c) Go to the root directory of Clients and execute 'gradle task runSOAPClient' to run SOAP client GUI.
    b) Go to the root directory of Clients and execute 'gradle task runRESTClient' to run REST client GUI.
    
    
    *Note: wsimport task in automatically executed everytime the SOAP client is run either separately or in parallel.