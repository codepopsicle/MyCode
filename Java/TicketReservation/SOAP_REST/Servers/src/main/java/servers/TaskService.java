package servers;

import javax.ws.rs.*;
import javax.ws.rs.core.MediaType;
import javax.ws.rs.core.Response;


@Path("/")
public class TaskService {
    TaskDesc td = new TaskDesc();

   /* public boolean GLOBAL_TASK = false;
    public static final String SESSION_ATTR_NAME = TaskService.class.getName() + "_DoTask";
    TaskDesc td = new TaskDesc();

@Context
public HttpServletRequest HttpRequest;

@Context
public HttpServletResponse HttpResponse;


    private TaskDesc getTaskDesc(HttpSession session) {
        if (GLOBAL_TASK) { // all sessions access the same Dictionary
            return td;
        } else { // each session gets its own Dictionary
            TaskDesc td1 = (TaskDesc) session.getAttribute(SESSION_ATTR_NAME);
            if (td1 == null) {
                session.setAttribute(SESSION_ATTR_NAME, td1 = new TaskDesc());
            }
            return td1;
        }
    }*/

    @GET
    @Path("/login/{key}")
    @Produces(MediaType.TEXT_PLAIN)
    public Response login(@PathParam("key") String userName){

        //calling login module
        String test = td.login(userName);


        //returning response
        return Response.ok("Response Received " + test).build();

    }

    @GET
    @Path("/fetchSeatsRow")
    public Response seatingArrangementRow(@QueryParam("flightSelect") String flightSelect, @QueryParam("classSelect") String resClass){

        //calling reservation module for Boeing
        String op = td.seatingArrangementRow(flightSelect, resClass);

        //returning response
        return Response.ok(op).build();

    }

    @GET
    @Path("/fetchSeatPrice")
    public Response seatPrice(@QueryParam("classSelect") String resClass){

        //calling reservation module for Boeing
        String op = td.seatPrice(resClass);

        //returning response
        return Response.ok(op).build();

    }

    @GET
    @Path("/fetchSeatsColumn")
    public Response seatingArrangementColumn(@QueryParam("flightSelect") String flightSelect, @QueryParam("classSelect") String resClass){

        //calling reservation module for Boeing
        String op = td.seatingArrangementColumn(flightSelect, resClass);

        //returning response
        return Response.ok(op).build();

    }



    @GET
    @Path("/reserveBoeing")
    public Response doReserveBoeing(@QueryParam("day") String daySelect, @QueryParam("class") String resClass, @QueryParam("row") int row
            , @QueryParam("column") int column, @QueryParam("selectedFlight") String selectedFlight){

        //calling reservation module for Boeing
        String bOP = td.doReserveBoeing(daySelect, resClass, row, column, selectedFlight);

        //returning response
        return Response.ok(bOP).build();

    }


    @GET
    @Path("/reserveAirbus")
    @Produces(MediaType.TEXT_PLAIN)
    public Response doReserveAirBus(@QueryParam("day") String daySelect, @QueryParam("class") String resClass, @QueryParam("row") int row
            , @QueryParam("column") int column, @QueryParam("selectedFlight") String selectedFlight){

        //calling reservation module for Boeing
        String aOP = td.doReserveAirBus(daySelect, resClass, row, column, selectedFlight);

        //returning response
        return Response.ok(aOP).build();

    }

    @GET
    @Path("/reserveEmbraer")
    @Produces(MediaType.TEXT_PLAIN)
    public Response doReserveEmbraer(@QueryParam("day") String daySelect, @QueryParam("class") String resClass, @QueryParam("row") int row
            , @QueryParam("column") int column, @QueryParam("selectedFlight") String selectedFlight){

        //calling reservation module for Boeing
        String eOP = td.doReserveEmbraer(daySelect, resClass, row, column, selectedFlight);


        //returning response
        return Response.ok(eOP).build();

    }

}
