import java.util.LinkedList;
public interface Servidor{
	LinkedList<Cliente> usuarios = new LinkedList<>();
	LinkedList<Hotel> hoteles = new LinkedList<>();
	LinkedList<Reserva> reservas = new LinkedList<>();
}
