package com.rohit.botiga.botigarohit.entities;

import javax.persistence.*;
import java.util.ArrayList;
import java.util.List;

@Entity
public class Producte {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private int idProducte;

    private String nomProducte, descripció, classe;
    private float preu;


    private String rutaImatge;

    public Producte(){

    }

    @OneToMany
    private List<Ressenya> alRessenyes = new ArrayList<>();


    public int getIdProducte() {
        return idProducte;
    }

    public void setIdProducte(int idProducte) {
        this.idProducte = idProducte;
    }

    public String getNomProducte() {
        return nomProducte;
    }

    public void setNomProducte(String nomProducte) {
        this.nomProducte = nomProducte;
    }

    public String getDescripció() {
        return descripció;
    }

    public void setDescripció(String descripció) {
        this.descripció = descripció;
    }

    public String getClasse() {
        return classe;
    }

    public void setClasse(String classe) {
        this.classe = classe;
    }

    public float getPreu() {
        return preu;
    }

    public void setPreu(float preu) {
        this.preu = preu;
    }

    public List<Ressenya> getAlRessenyes() {
        return alRessenyes;
    }

    public void setAlRessenyes(List<Ressenya> alRessenyes) {
        this.alRessenyes = alRessenyes;
    }

    public String getRutaImatge() {
        return rutaImatge;
    }

    public void setRutaImatge(String rutaImatge) {
        this.rutaImatge = rutaImatge;
    }
}
//
//    {
//            "nomProducte" : "Mouse LOGITECH",
//            "descripció" : " ADSFSDFSDFSDFSDFSD SDF",
//            "classe" : "Tecnologia",
//            "preu" : 20.00
//            }
