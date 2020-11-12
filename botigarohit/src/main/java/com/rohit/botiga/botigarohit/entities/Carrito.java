package com.rohit.botiga.botigarohit.entities;

import javax.persistence.*;
import java.util.ArrayList;
import java.util.List;

@Entity
public class Carrito {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private int idCarrito;

    private float total;

    @OneToMany(cascade = CascadeType.ALL)
    private List<LiniaCarrito> alLiniaFactura = new ArrayList<>();


    public Carrito(){

    }

    public int getIdClient() {
        return idCarrito;
    }



    public void setIdClient(int idCarrito) {
        this.idCarrito = idCarrito;
    }

    public float getTotal() {
        return total;
    }

    public void setTotal(float total) {
        this.total = total;
    }

    public List<LiniaCarrito> getAlLiniaFactura() {
        return alLiniaFactura;
    }

    public void setAlLiniaFactura(List<LiniaCarrito> alLiniaFactura) {
        this.alLiniaFactura = alLiniaFactura;
    }

}
