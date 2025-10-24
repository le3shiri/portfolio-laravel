# Architecture des Services - Portfolio Laravel

## Vue d'ensemble

L'architecture a été refactorisée pour respecter le principe de **séparation des responsabilités (Separation of Concerns)** et le **principe de responsabilité unique (Single Responsibility Principle - SRP)**.

## Structure des Services

### 1. **TechnologieService**
📁 `app/Services/TechnologieService.php`

**Responsabilité :** Gestion exclusive des technologies.

**Méthodes :**
- `getAllTechnologies()` - Récupère toutes les technologies
- `getTechnologieById(int $id)` - Récupère une technologie par son ID
- `getTechnologiesByIds(array $ids)` - Récupère plusieurs technologies par leurs IDs

---

### 2. **DeveloperService**
📁 `app/Services/DeveloperService.php`

**Responsabilité :** Gestion exclusive du développeur et de ses informations.

**Méthodes :**
- `getDeveloper()` - Récupère les informations du développeur
- `addProjetToDeveloper(Projet $projet)` - Ajoute un projet au développeur
- `getDeveloperProjets()` - Récupère tous les projets du développeur
- `getDeveloperFullName()` - Récupère le nom complet du développeur

---

### 3. **ProjetService**
📁 `app/Services/ProjetService.php`

**Responsabilité :** Gestion exclusive des projets.

**Dépendances :** `TechnologieService` (pour associer les technologies aux projets)

**Méthodes :**
- `getAllProjets()` - Récupère tous les projets
- `getProjetById(int $id)` - Récupère un projet par son ID
- `getProjetsByTechnologie(int $technologieId)` - Récupère les projets utilisant une technologie
- `getProjetsCount()` - Récupère le nombre total de projets

---

### 4. **PortfolioService** (Coordinateur/Facade)
📁 `app/Services/PortfolioService.php`

**Responsabilité :** Coordination des services spécialisés. Agit comme une **facade** pour simplifier l'accès aux différents services.

**Dépendances :** 
- `DeveloperService`
- `ProjetService`
- `TechnologieService`

**Méthodes :**
- `getDeveloper()` - Délègue à DeveloperService
- `getProjets()` - Délègue à ProjetService
- `getProjetById(int $id)` - Délègue à ProjetService
- `getTechnologies()` - Délègue à TechnologieService
- `getProjetsByTechnologie(int $technologieId)` - Délègue à ProjetService
- `getDeveloperFullName()` - Délègue à DeveloperService
- `getProjetsCount()` - Délègue à ProjetService

---

## Controller

### **PortfolioController**
📁 `app/Http/Controllers/PortfolioController.php`

**Injection de dépendances :** Utilise l'injection de dépendances via le constructeur. Laravel résout automatiquement toutes les dépendances grâce à son **Service Container**.

```php
public function __construct(PortfolioService $portfolioService)
{
    $this->portfolioService = $portfolioService;
}
```

---

## Avantages de cette Architecture

### ✅ **Séparation des responsabilités**
Chaque service a une seule responsabilité claire et bien définie.

### ✅ **Maintenabilité**
Le code est plus facile à maintenir et à modifier. Par exemple, si vous devez changer la logique des technologies, vous ne modifiez que `TechnologieService`.

### ✅ **Testabilité**
Chaque service peut être testé indépendamment avec des tests unitaires.

### ✅ **Réutilisabilité**
Les services peuvent être réutilisés dans d'autres parties de l'application.

### ✅ **Injection de dépendances**
Laravel gère automatiquement l'instanciation des services grâce au Service Container, ce qui facilite les tests et réduit le couplage.

---

## Diagramme de dépendances

```
PortfolioController
        ↓
PortfolioService (Facade)
        ↓
    ┌───┴───┐
    ↓       ↓       ↓
DeveloperService  ProjetService  TechnologieService
                       ↓
                TechnologieService
```

---

## Classes de données

Les classes suivantes restent des **classes de données (Data Transfer Objects)** :
- `Developer` (app/Classes/Developer.php)
- `Projet` (app/Classes/Projet.php)
- `Technologie` (app/Classes/Technologie.php)

Ces classes ne contiennent que des propriétés et des méthodes simples de manipulation de données.

---

## Prochaines étapes possibles

1. **Persistance des données** : Convertir les classes en Models Eloquent pour utiliser une base de données
2. **Repositories** : Ajouter une couche Repository pour abstraire l'accès aux données
3. **Service Provider** : Créer un Service Provider personnalisé pour enregistrer les services
4. **Tests unitaires** : Créer des tests pour chaque service
5. **API REST** : Créer des endpoints API en utilisant les services existants

---

**Date de refactorisation :** 24 octobre 2025
**Principe appliqué :** SOLID - Single Responsibility Principle
