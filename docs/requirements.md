# Requirements Engineering Document
## AI-Powered Integrated Palm Oil Plantation Management Information System

**Version:** 1.0 (Template)
**Date:** 2025-01-15
**Phase:** 2 — Requirements Engineering
**Status:** Draft

---

## 1. Functional Requirements

Derived from To-Be processes (Phase 1) and Business Rules Catalog.

### 1.1 Module: Master Data Management (MDM)

| FR ID | Requirement | Priority | Source Process | Business Rules |
|-------|-------------|----------|----------------|----------------|
| FR-MDM-01 | Manage Company, Estate, Afdeling, Block hierarchy with GIS boundaries | Must | A.01-A.05, B.03 | Unique codes, parent-child integrity |
| FR-MDM-02 | Manage Land records with legal documents, certificates, expiry alerts | Must | B.01-B.02, B.12 | Document expiry notifications |
| FR-MDM-03 | Manage Soil data per block with lab results history | Should | A.07 | Versioned soil profiles |
| FR-MDM-04 | Manage Palm Variety master with yield potential, characteristics | Must | A.08 | Variety-specific parameters |
| FR-MDM-05 | Manage Planting Year Cohort tracking | Must | A.09, D.03 | Cohort-based reporting |
| FR-MDM-06 | Manage Tree Population with census updates, condition tracking | Must | A.10, D.05 | Annual census workflow |
| FR-MDM-07 | Manage Organization Structure (Company → Estate → Afdeling → Dept) | Must | A.11-A.12 | Hierarchy-based data access |
| FR-MDM-08 | Manage Employee master with position, grade, assignment history | Must | A.13, K.01-K.04 | Org-based permissions |
| FR-MDM-09 | Manage Vendor master with categories, performance scorecard | Must | A.15, J.05 | Evaluation workflow |
| FR-MDM-10 | Manage Customer master with contracts, pricing agreements | Must | A.16, M.01-M.02 | Contract-linked pricing |
| FR-MDM-11 | Manage Material master with UOM, category, specs, hazard class | Must | A.17, I.12-I.15 | Category-specific attributes |
| FR-MDM-12 | Manage Equipment/Vehicle master with maintenance schedule | Should | A.18-A.19, G.04 | Asset lifecycle tracking |
| FR-MDM-13 | Manage Warehouse master with bins, capacity, type | Must | A.20, I.01 | Multi-warehouse support |
| FR-MDM-14 | Manage Cost Center & Budget with version control | Must | A.21-A.22, L.01-L.02 | Budget virement workflow |
| FR-MDM-15 | Manage User, Role, Permission with RBAC and data scope | Must | A.23-A.24, K.23 | Org-hierarchy data restriction |

### 1.2 Module: Nursery Management (NUR)

| FR ID | Requirement | Priority | Source Process | Business Rules |
|-------|-------------|----------|----------------|----------------|
| FR-NUR-01 | Seed procurement planning linked to planting plan | Must | C.01, D.01 | Variety/qty validation |
| FR-NUR-02 | Germination batch tracking with conditions, rate, culls | Must | C.02 | Batch traceability |
| FR-NUR-03 | Pre-nursery & Main nursery stage management (media, shade, water) | Must | C.03-C.04 | Stage transition rules |
| FR-NUR-04 | Daily seedling monitoring (growth, pests, diseases) with mobile capture | Must | C.05, C.07 | Offline-capable mobile |
| FR-NUR-05 | Nursery fertilization scheduling & recording per batch | Should | C.06 | Fertilizer recipe per stage |
| FR-NUR-06 | Seedling grading (height, girth, leaf, roots) with A/B/C/reject | Must | C.08 | Grade standards per variety |
| FR-NUR-07 | Seedling distribution to estates with delivery notes | Must | C.09, D.02 | Block assignment tracking |
| FR-NUR-08 | Real-time seedling inventory with mortality tracking | Must | C.10-C.11 | Mortality cause codes |
| FR-NUR-09 | Nursery cost analysis per seedling (material, labor, overhead) | Should | C.12 | Cost allocation to planting |

### 1.3 Module: Planting & Replanting (PLN)

| FR ID | Requirement | Priority | Source Process | Business Rules |
|-------|-------------|----------|----------------|----------------|
| FR-PLN-01 | Annual planting plan with block, variety, density, schedule | Must | D.01 | Budget-linked approval |
| FR-PLN-02 | Planting execution recording (date, variety, spacing, population) | Must | D.02-D.06 | GPS polygon capture |
| FR-PLN-03 | Missing plant identification & replacement workflow | Should | D.07 | Census-based detection |
| FR-PLN-04 | TBM/TM growth monitoring with measurement standards | Must | D.08-D.09 | Monthly measurement workflow |
| FR-PLN-05 | Replanting planning based on age, yield decline, ROI analysis | Should | D.10, B.11 | Economic threshold model |

### 1.4 Module: Agronomy & Maintenance (AGR)

| FR ID | Requirement | Priority | Source Process | Business Rules |
|-------|-------------|----------|----------------|----------------|
| FR-AGR-01 | Fertilization planning: soil/leaf analysis → recommendation → plan | Must | E.01, BR-E-01/02 | AI-assisted recommendation |
| FR-AGR-02 | Fertilizer work order generation per block/round with rates | Must | E.02 | Plan→WO auto-generation |
| FR-AGR-03 | Mobile fertilizer application recording (actual vs plan, conditions) | Must | E.02-E.03, BR-E-03 | Offline, GPS, photo evidence |
| FR-AGR-04 | Weed control planning & execution with method tracking | Should | E.04-E.05 | Chemical/mechanical options |
| FR-AGR-05 | Pest/disease monitoring with scouting routes, traps, thresholds | Must | E.06, BR-E-04 | Threshold alerts |
| FR-AGR-06 | Pest/disease control execution with pesticide tracking | Must | E.07, BR-E-04 | PHI compliance, buffer zones |
| FR-AGR-07 | Disease monitoring with lab confirmation & quarantine | Must | E.08, BR-E-05 | Ganoderma roguing workflow |
| FR-AGR-08 | Pruning management with frond count standards | Should | E.10, BR-E-06 | Age-based standards |
| FR-AGR-09 | Drainage maintenance scheduling & condition recording | Should | E.11 | Silt level, flow monitoring |
| FR-AGR-10 | Soil management with analysis history & amendment tracking | Should | E.12 | pH, nutrient trend analysis |
| FR-AGR-11 | Water management: rainfall, water table, irrigation/drainage ops | Should | E.13 | Daily/seasonal operations |
| FR-AGR-12 | Field inspection planning, mobile execution, verification workflow | Must | E.14-E.16 | Checklist-based, photo evidence |
| FR-AGR-13 | Agronomic recommendation engine (AI) with evidence & confidence | Could | E.17, Phase 7 | RAG + deterministic rules |

### 1.5 Module: Harvest Management (HVST)

| FR ID | Requirement | Priority | Source Process | Business Rules |
|-------|-------------|----------|----------------|----------------|
| FR-HVST-01 | Harvest planning: monthly schedule by block, rotation, labor | Must | F.01-F.03 | Interval enforcement (BR-F-01) |
| FR-HVST-02 | Daily harvest assignment to harvesters with quota | Must | F.04-F.05 | Harvester capacity |
| FR-HVST-03 | Mobile harvest recording: bunches, weight, grade, loose fruit, restan | Must | F.06-F.11, BR-F-02/03/04 | Offline, GPS, photo |
| FR-HVST-04 | Real-time harvester productivity tracking (ton/man-day) | Must | F.06, KPI-P-07 | Auto-calculation |
| FR-HVST-05 | Harvest quality grading at field & weighbridge | Must | F.09, BR-F-06 | Grade standards |
| FR-HVST-06 | Restan management with reason codes & follow-up | Must | F.11, BR-F-03 | >5% triggers investigation |
| FR-HVST-07 | Harvest target setting & variance analysis per block/afdeling | Should | F.12 | Age/variety benchmarks |
| FR-HVST-08 | Harvest premium calculation (productivity, quality, attendance) | Must | F.13, BR-K-12 | Payroll integration |
| FR-HVST-09 | Harvest cost analysis per ton (labor, tools, transport, overhead) | Should | F.14, KPI-F-02 | Cost allocation |

### 1.6 Module: Transport & Logistics (TRN)

| FR ID | Requirement | Priority | Source Process | Business Rules |
|-------|-------------|----------|----------------|----------------|
| FR-TRN-01 | Daily transport planning: FFB volume → vehicle/driver assignment | Must | G.01, G.06 | Capacity optimization |
| FR-TRN-02 | TPH management: capacity, schedule, loading optimization | Must | G.02-G.03 | Holding time limit (BR-G-05) |
| FR-TRN-03 | Vehicle master with specs, documents, maintenance schedule | Must | G.04 | Load limit enforcement (BR-G-02) |
| FR-TRN-04 | Driver master with license, medical, roster, working hours | Must | G.05, BR-G-03 | Hours compliance |
| FR-TRN-05 | Trip recording: GPS tracking, weighbridge sync, timestamps | Must | G.07-G.08, BR-G-01 | Auto-weighbridge integration |
| FR-TRN-06 | Fuel management: issuance, consumption, efficiency tracking | Must | G.09, BR-G-04 | Benchmark alerts |
| FR-TRN-07 | Travel time monitoring with delay reason codes | Should | G.10 | Route optimization |
| FR-TRN-08 | Road condition reporting & maintenance linkage | Should | G.11 | Engineering integration |
| FR-TRN-09 | Mill delivery coordination: queue, schedule, quality handover | Must | G.12 | Mill slot booking |
| FR-TRN-10 | Transport vendor management with performance tracking | Should | G.13, BR-J-04 | Scorecard |
| FR-TRN-11 | Transport cost analysis per ton-km with breakdown | Should | G.14, KPI-T-01 | Fuel, maintenance, labor |
| FR-TRN-12 | Vehicle utilization analysis (operating hrs, trips, downtime) | Should | G.15, KPI-T-02 | >80% target |

### 1.7 Module: Palm Oil Mill Management (MILL)

| FR ID | Requirement | Priority | Source Process | Business Rules |
|-------|-------------|----------|----------------|----------------|
| FR-MILL-01 | Weighbridge operations: auto-capture, grade, source block linkage | Must | H.01-H.02, BR-H-01 | 24hr processing window |
| FR-MILL-02 | FFB sorting & process routing by grade | Should | H.03 | Grade-based routing |
| FR-MILL-03 | Process monitoring: sterilization, threshing, pressing, clarification | Could | H.04-H.08 | MES integration |
| FR-MILL-04 | CPO & Kernel production recording with tank/weight tracking | Must | H.09-H.10 | Real-time inventory |
| FR-MILL-05 | Rendement calculation (OER, KER) per shift/day with source allocation | Must | H.11, BR-H-02 | Block-level allocation |
| FR-MILL-06 | Oil losses tracking by category (sterilizer, sludge, effluent, etc.) | Must | H.12, BR-H-03 | <1.2% target |
| FR-MILL-07 | Kernel losses tracking (uncracked, shell contamination) | Should | H.13 | Quality linkage |
| FR-MILL-08 | Throughput monitoring with bottleneck identification | Should | H.14, KPI-M-04 | Hourly rate |
| FR-MILL-09 | Downtime recording with reason, duration, equipment, impact | Must | H.15, KPI-M-05 | Maintenance linkage |
| FR-MILL-10 | Maintenance management: preventive, predictive, corrective | Should | H.16 | CMMS integration |
| FR-MILL-11 | Laboratory analysis: FFB, CPO, Kernel, POME with LIMS | Must | H.17-H.18, BR-H-04/05 | Auto-spec check |
| FR-MILL-12 | Waste management: POME treatment, EFB utilization tracking | Must | H.19-H.20, BR-H-06 | Regulatory compliance |
| FR-MILL-13 | Production inventory: tank stock, dispatch, reconciliation | Must | H.21 | Real-time balance |
| FR-MILL-14 | Mill performance dashboard with all KPIs | Must | H.22, KPI-M-01/09 | Real-time |

### 1.8 Module: Inventory & Warehouse (INV)

| FR ID | Requirement | Priority | Source Process | Business Rules |
|-------|-------------|----------|----------------|----------------|
| FR-INV-01 | Multi-warehouse stock management with bin locations | Must | I.01 | Warehouse hierarchy |
| FR-INV-02 | Goods Receipt (GR) mobile: PO/Transfer/Production, inspection, barcode | Must | I.02, J.07 | 3-way match ready |
| FR-INV-03 | Goods Issue (GI) mobile: PR/WO/Transfer, picking, barcode | Must | I.03 | FIFO/FEFO enforcement (BR-I-04) |
| FR-INV-04 | Inter-warehouse transfer with approval & in-transit tracking | Should | I.04 | Transfer workflow |
| FR-INV-05 | Stock opname (cycle count & full) with variance workflow | Must | I.05, BR-I-03 | >2% investigation |
| FR-INV-06 | Stock adjustment with reason codes, approval, audit trail | Must | I.06 | Adjustment types |
| FR-INV-07 | Min/Max/Safety stock configuration with auto-reorder alerts | Must | I.07-I.09, BR-I-01/02 | Auto-PR generation |
| FR-INV-08 | Dead stock & slow-moving identification with aging reports | Should | I.10-I.11, BR-I-05 | 12/24 month rules |
| FR-INV-09 | Category-specific inventory: fertilizer, pesticide, spares, fuel, tools | Must | I.12-I.16 | Category attributes |
| FR-INV-10 | Real-time stock visibility across all warehouses | Must | I.01-I.16 | Dashboard integration |

### 1.9 Module: Procurement (PRC)

| FR ID | Requirement | Priority | Source Process | Business Rules |
|-------|-------------|----------|----------------|----------------|
| FR-PRC-01 | Purchase Requisition (PR) creation from min-stock or manual | Must | J.01, I.07 | Budget check (BR-J-03) |
| FR-PRC-02 | PR approval workflow per matrix (tiered by value) | Must | J.02, BR-J-02 | Emergency override |
| FR-PRC-03 | Purchase Order (PO) generation from approved PR with vendor selection | Must | J.03 | 3-quote rule (BR-J-01) |
| FR-PRC-04 | PO approval workflow with budget commitment | Must | J.04, BR-J-02 | Commitment control |
| FR-PRC-05 | Vendor portal: PO acknowledgement, delivery schedule, invoice upload | Should | J.05, J.10 | Self-service |
| FR-PRC-06 | Procurement planning: annual plan, budget allocation, contract mgmt | Should | J.06 | Plan vs actual |
| FR-PRC-07 | Goods Receipt & Inspection linked to PO with quality results | Must | J.07, I.02 | 3-way match |
| FR-PRC-08 | 3-Way Match: PO + GR + Invoice with exception handling | Must | J.08 | Auto-match tolerance |
| FR-PRC-09 | Procurement budget control: commitment, actual, available real-time | Must | J.09, BR-J-03 | Budget blocking |
| FR-PRC-10 | Supplier evaluation scorecard (quality, delivery, price, service) | Should | J.10, BR-J-04 | Quarterly |
| FR-PRC-11 | Procurement history & audit trail for all transactions | Must | J.11 | Full traceability |

### 1.10 Module: Human Resources (HRM)

| FR ID | Requirement | Priority | Source Process | Business Rules |
|-------|-------------|----------|----------------|----------------|
| FR-HRM-01 | Employee onboarding with documents, contract, probation | Must | K.01 | Digital forms |
| FR-HRM-02 | Organization management with position hierarchy | Must | K.02, A.11 | Data scope basis |
| FR-HRM-03 | Recruitment workflow: requisition → screening → offer → hire | Should | K.03 | ATS-lite |
| FR-HRM-04 | Placement & transfer with effective date, history | Must | K.04 | Org sync |
| FR-HRM-05 | Attendance recording: biometric/mobile/geo-fenced, shift-based | Must | K.05, BR-K-01 | Offline sync |
| FR-HRM-06 | Work assignment: daily task, location, target per employee | Must | K.06 | Supervisor mobile |
| FR-HRM-07 | Productivity tracking: output vs standard per role/task | Must | K.07, KPI-H-02 | Auto-calc |
| FR-HRM-08 | Performance appraisal: KPI + competency, periodic | Should | K.08 | Configurable cycles |
| FR-HRM-09 | Leave management: balance, request, approval, calendar | Must | K.09, BR-K-04 | Carry-forward rules |
| FR-HRM-10 | Overtime management: request, approval, limit enforcement | Must | K.10, BR-K-02 | 40h/60h limits |
| FR-HRM-11 | Payroll processing: attendance, productivity, rates, deductions | Must | K.11 | Integration-ready |
| FR-HRM-12 | Incentive/premium calculation: harvest, quality, attendance | Must | K.12, F.13 | Formula-based |
| FR-HRM-13 | Training management: needs, plan, execution, certification | Should | K.13 | Competency link |
| FR-HRM-14 | Competency matrix: skills, certifications, gaps per role | Should | K.14 | Training needs |
| FR-HRM-15 | K3 (OHS): hazard ID, incident reporting, inspection, actions | Must | K.15, KPI-H-06 | Regulatory |

### 1.11 Module: Finance & Accounting (FIN)

| FR ID | Requirement | Priority | Source Process | Business Rules |
|-------|-------------|----------|----------------|----------------|
| FR-FIN-01 | Budget planning: top-down + bottom-up, version control | Must | L.01, A.22 | Multi-version |
| FR-FIN-02 | Cost center management with ownership & budget | Must | L.02, BR-L-01 | Single owner |
| FR-FIN-03 | Expense recording: invoice, receipt, allocation to CC/project | Must | L.03 | Multi-dimensional |
| FR-FIN-04 | Revenue recording: sales, production, other income | Must | L.04 | Auto from sub-modules |
| FR-FIN-05 | Cash flow management: receipts, payments, forecast | Should | L.05 | Daily position |
| FR-FIN-06 | Accounts Payable: invoice, approval, payment terms, aging | Must | L.06 | 3-way match link |
| FR-FIN-07 | Accounts Receivable: invoice, collection, aging, provision | Must | L.07 | Customer portal |
| FR-FIN-08 | General Ledger: chart of accounts, journals, trial balance | Must | L.08 | Sub-ledger integration |
| FR-FIN-09 | Cost accounting: cost pools, drivers, allocation to products | Must | L.09, L.11-L.13 | Per ha, per kg FFB, per kg CPO |
| FR-FIN-10 | Operational cost tracking by CC, category, period | Must | L.10 | Drill-down |
| FR-FIN-11 | Profitability analysis: estate, block, crop, customer | Should | L.14 | Multi-dimensional |
| FR-FIN-12 | Financial reporting: P&L, BS, CF, notes, consolidation | Must | L.15 | Multi-entity |

### 1.12 Module: Sales & Downstream (SAL)

| FR ID | Requirement | Priority | Source Process | Business Rules |
|-------|-------------|----------|----------------|----------------|
| FR-SAL-01 | Customer master with contracts, pricing terms, credit limits | Must | M.01-M.02 | Contract repository |
| FR-SAL-02 | Sales order management: contract/spot, allocation, scheduling | Must | M.03 | Inventory linkage |
| FR-SAL-03 | Pricing management: market-based, contract, premium/discount | Should | M.04 | Price lists |
| FR-SAL-04 | CPO/Kernel sales execution: DO, tank/warehouse allocation, shipping | Must | M.05-M.06 | Quality cert (COA) |
| FR-SAL-05 | Sales inventory: production, dispatch, stock balance real-time | Must | M.07 | Mill/warehouse sync |
| FR-SAL-06 | Delivery management: vessel/truck, documents, tracking | Should | M.08-M.09 | Shipping docs |
| FR-SAL-07 | Sales invoicing: auto from DO, price, terms, tax | Must | M.10 | Finance integration |
| FR-SAL-08 | Payment collection: receipt, allocation, reconciliation | Must | M.11 | AR integration |
| FR-SAL-09 | Receivables management: aging, collection efforts, provision | Should | M.12 | Dunning workflow |
| FR-SAL-10 | Customer profitability: revenue, cost, payment behavior | Should | M.13 | BI integration |

### 1.13 Module: Governance, Sustainability & Compliance (GSC)

| FR ID | Requirement | Priority | Source Process | Business Rules |
|-------|-------------|----------|----------------|----------------|
| FR-GSC-01 | Legal compliance register: permits, regulations, deadlines, alerts | Must | N.01 | Automated alerts |
| FR-GSC-02 | ISPO certification management: standards, evidence, audit prep | Must | N.02 | Evidence mapping |
| FR-GSC-03 | RSPO certification management (if applicable) | Could | N.03 | Parallel to ISPO |
| FR-GSC-04 | Environmental management: aspects, impacts, monitoring, mitigation | Should | N.04 | EMS framework |
| FR-GSC-05 | Waste management compliance: manifest, disposal, reporting | Must | N.05 | Regulatory forms |
| FR-GSC-06 | Traceability engine: FFB from block → TPH → mill → customer | Must | N.06, F/G/H/M | End-to-end |
| FR-GSC-07 | K3 management: hazard, incident, inspection, corrective actions | Must | N.07, K.15 | Regulatory reporting |
| FR-GSC-08 | Audit management: plan, criteria, evidence, findings, follow-up | Should | N.08 | Internal/External |
| FR-GSC-09 | Risk management: register, assessment, mitigation, monitoring | Should | N.09 | Risk heatmap |
| FR-GSC-10 | Sustainability reporting: GRI, ISPO, RSPO, custom frameworks | Should | N.10 | Data collection |

### 1.14 Module: Business Intelligence & AI (BIA)

| FR ID | Requirement | Priority | Source Process | Business Rules |
|-------|-------------|----------|----------------|----------------|
| FR-BIA-01 | Operational dashboard: real-time KPIs per role (estate, mill, transport) | Must | O.01, O.07 | Role-based |
| FR-BIA-02 | Management dashboard: executive summary, trends, alerts | Must | O.02 | Drill-down |
| FR-BIA-03 | Production reports: daily, monthly, comparative, export | Must | O.03 | Scheduled/Ad-hoc |
| FR-BIA-04 | Productivity reports: labor, machine, land, benchmarking | Should | O.04 | Multi-dimensional |
| FR-BIA-05 | Cost reports: by CC, category, ha, kg FFB, kg CPO, variance | Must | O.05, L.11-L.13 | Drill-down |
| FR-BIA-06 | Financial reports: P&L, BS, CF, ratios, consolidation | Must | O.06, L.15 | Periodic |
| FR-BIA-07 | KPI monitoring: thresholds, alerts, escalation, history | Must | O.07, All KPIs | Real-time |
| FR-BIA-08 | Drill-down analysis: from KPI to transaction level | Must | O.08 | Self-service |
| FR-BIA-09 | Historical trend analysis: time-series, seasonality, forecasting | Should | O.09-O.10 | Statistical models |
| FR-BIA-10 | AI Plantation Helper: contextual Q&A, anomaly detection, recommendations | Must | Phase 7, 7.1-7.3 | RAG + Guardrails |
| FR-BIA-11 | AI Insight format: problem, evidence, root cause, recommendation, priority | Must | 7.2 | Structured output |
| FR-BIA-12 | Knowledge base: SOP ingestion, chunking, embedding, retrieval, citation | Must | 8.1-8.2 | Versioned, access-controlled |

---

## 2. Non-Functional Requirements

| NFR ID | Category | Requirement | Metric / Target | Priority |
|--------|----------|-------------|-----------------|----------|
| NFR-01 | Performance | Page load (dashboard) | < 3 seconds | Must |
| NFR-02 | Performance | API response (CRUD) | < 500ms (p95) | Must |
| NFR-03 | Performance | Report generation (standard) | < 10 seconds | Must |
| NFR-04 | Performance | Report generation (complex) | < 60 seconds | Should |
| NFR-05 | Performance | Mobile sync (offline → online) | < 30 seconds for 1 day data | Must |
| NFR-06 | Scalability | Concurrent users | 500+ | Must |
| NFR-07 | Scalability | Transaction volume | 10,000 harvest records/day | Must |
| NFR-08 | Scalability | Data retention | 10 years online, archive older | Should |
| NFR-09 | Availability | Uptime (production) | 99.5% (excluding planned maintenance) | Must |
| NFR-10 | Availability | RPO (Recovery Point Objective) | < 1 hour | Must |
| NFR-11 | Availability | RTO (Recovery Time Objective) | < 4 hours | Must |
| NFR-12 | Security | Authentication | MFA for admin, SSO option | Must |
| NFR-13 | Security | Authorization | RBAC + data scope (org hierarchy) | Must |
| NFR-14 | Security | Data encryption | TLS 1.3 in transit, AES-256 at rest | Must |
| NFR-15 | Security | Audit logging | All CRUD + auth events, immutable | Must |
| NFR-16 | Security | Penetration testing | Annual, zero critical findings | Must |
| NFR-17 | Offline | Mobile app offline capability | Full CRUD for field ops | Must |
| NFR-18 | Offline | Conflict resolution | Last-write-wins + manual merge | Must |
| NFR-19 | Usability | Mobile responsiveness | Works on 5" screen, touch-friendly | Must |
| NFR-20 | Usability | Language | Bahasa Indonesia (primary), English | Must |
| NFR-21 | Usability | Accessibility | WCAG 2.1 AA | Should |
| NFR-22 | Integration | Weighbridge API | Real-time sync, multiple vendors | Must |
| NFR-23 | Integration | Biometric/Attendance devices | Standard protocols | Should |
| NFR-24 | Integration | Accounting system | API or file import (CSV/Excel) | Should |
| NFR-25 | Integration | GIS/Mapping | GeoJSON, WMS, shapefile import | Should |
| NFR-26 | Maintainability | Code coverage | > 80% unit, > 60% integration | Must |
| NFR-27 | Maintainability | Deployment | Zero-downtime, rollback < 5 min | Must |
| NFR-28 | Maintainability | Documentation | API docs, data dictionary, runbooks | Must |
| NFR-29 | AI Quality | Groundedness score | > 0.85 on eval set | Must |
| NFR-30 | AI Quality | Hallucination rate | < 5% | Must |
| NFR-31 | AI Quality | Response latency | < 3 seconds (p95) | Must |
| NFR-32 | AI Quality | Citation accuracy | > 90% | Must |
| NFR-33 | Compliance | ISPO audit readiness | Evidence auto-generated | Must |
| NFR-34 | Compliance | Data privacy | Personal data protection (UU PDP) | Must |

---

## 3. User Stories

Format: **As a [role], I want to [action], so that [benefit].**

### 3.1 Estate Manager
| US ID | User Story | Priority | Module |
|-------|------------|----------|--------|
| US-EM-01 | As an Estate Manager, I want to view real-time harvest productivity per afdeling/block, so that I can identify underperforming areas immediately. | Must | HVST, BIA |
| US-EM-02 | As an Estate Manager, I want to approve daily harvest assignments and transport plans, so that operations run smoothly. | Must | HVST, TRN |
| US-EM-03 | As an Estate Manager, I want to see fertilization plan vs actual with cost variance, so that I control agronomy budget. | Must | AGR, FIN |
| US-EM-04 | As an Estate Manager, I want to receive alerts when restan > 5% or interval > 10 days, so that I can take corrective action. | Must | HVST, BIA |
| US-EM-05 | As an Estate Manager, I want to review monthly cost per hectare by category, so that I optimize operational efficiency. | Must | FIN, BIA |

### 3.2 Field Supervisor (Mandor)
| US ID | User Story | Priority | Module |
|-------|------------|----------|--------|
| US-FS-01 | As a Field Supervisor, I want to record harvest data (bunches, weight, grade, loose fruit, restan) on mobile offline, so that I don't need paper forms. | Must | HVST |
| US-FS-02 | As a Field Supervisor, I want to assign daily tasks to harvesters and maintenance gangs, so that work is organized. | Must | HRM, AGR |
| US-FS-03 | As a Field Supervisor, I want to verify fertilizer application with photos and GPS, so that compliance is documented. | Must | AGR |
| US-FS-04 | As a Field Supervisor, I want to report pest/disease findings with location and severity, so that agronomy can respond fast. | Must | AGR |
| US-FS-05 | As a Field Supervisor, I want to do stock opname on mobile with barcode scanning, so that inventory is accurate. | Should | INV |

### 3.3 Harvester
| US ID | User Story | Priority | Module |
|-------|------------|----------|--------|
| US-HV-01 | As a Harvester, I want to see my daily assignment (block, quota) on my phone, so that I know where to work. | Must | HVST |
| US-HV-02 | As a Harvester, I want to record my harvested bunches and weight easily, so that my productivity is tracked fairly. | Must | HVST |
| US-HV-03 | As a Harvester, I want to see my productivity trend and premium estimate, so that I am motivated. | Should | HVST, HRM |

### 3.4 Agronomist
| US ID | User Story | Priority | Module |
|-------|------------|----------|--------|
| US-AG-01 | As an Agronomist, I want to create fertilization plans based on soil/leaf analysis with AI recommendations, so that nutrient application is optimized. | Must | AGR, BIA |
| US-AG-02 | As an Agronomist, I want to monitor pest/disease trends across estates with threshold alerts, so that I can prevent outbreaks. | Must | AGR, BIA |
| US-AG-03 | As an Agronomist, I want to correlate fertilization actuals with yield results per block, so that I improve future recommendations. | Must | AGR, HVST, BIA |
| US-AG-04 | As an Agronomist, I want to plan replanting based on age, yield decline, and ROI, so that long-term productivity is maintained. | Should | PLN, BIA |

### 3.5 Transport Manager
| US ID | User Story | Priority | Module |
|-------|------------|----------|--------|
| US-TM-01 | As a Transport Manager, I want to optimize daily vehicle/driver assignments based on FFB volume and TPH locations, so that transport cost is minimized. | Must | TRN |
| US-TM-02 | As a Transport Manager, I want to track all trips in real-time with GPS and weighbridge sync, so that I have full visibility. | Must | TRN |
| US-TM-03 | As a Transport Manager, I want to monitor fuel efficiency per vehicle and detect anomalies, so that I control fuel cost. | Must | TRN, BIA |
| US-TM-04 | As a Transport Manager, I want to manage vehicle maintenance schedules and downtime, so that fleet availability is maximized. | Should | TRN |

### 3.6 Mill Manager
| US ID | User Story | Priority | Module |
|-------|------------|----------|--------|
| US-MM-01 | As a Mill Manager, I want to see real-time OER, KER, and losses by source block, so that I can identify quality issues. | Must | MILL, BIA |
| US-MM-02 | As a Mill Manager, I want to monitor throughput and downtime with root cause, so that I maximize utilization. | Must | MILL, BIA |
| US-MM-03 | As a Mill Manager, I want to manage lab quality results (FFA, moisture, POME BOD) with auto-spec alerts, so that product quality is assured. | Must | MILL |
| US-MM-04 | As a Mill Manager, I want to track CPO/kernel inventory and dispatch with tank reconciliation, so that stock is accurate. | Must | MILL, INV |

### 3.7 Warehouse Keeper
| US ID | User Story | Priority | Module |
|-------|------------|----------|--------|
| US-WK-01 | As a Warehouse Keeper, I want to do GR/GI with barcode scanning on mobile, so that stock is updated in real-time. | Must | INV |
| US-WK-02 | As a Warehouse Keeper, I want to receive min-stock alerts and auto-generated PRs, so that stockouts are prevented. | Must | INV, PRC |
| US-WK-03 | As a Warehouse Keeper, I want to perform cycle counts with variance workflow, so that accuracy is maintained. | Must | INV |

### 3.8 Procurement Officer
| US ID | User Story | Priority | Module |
|-------|------------|----------|--------|
| US-PO-01 | As a Procurement Officer, I want to manage PR→PO workflow with tiered approval and budget check, so that spending is controlled. | Must | PRC |
| US-PO-02 | As a Procurement Officer, I want to evaluate vendors with scorecards and manage contracts, so that supplier performance improves. | Should | PRC |
| US-PO-03 | As a Procurement Officer, I want to do 3-way match (PO, GR, Invoice) with auto-reconciliation, so that payments are accurate. | Must | PRC, FIN |

### 3.9 Finance Manager
| US ID | User Story | Priority | Module |
|-------|------------|----------|--------|
| US-FM-01 | As a Finance Manager, I want to see cost per hectare, per kg FFB, per kg CPO with drill-down, so that I analyze profitability. | Must | FIN, BIA |
| US-FM-02 | As a Finance Manager, I want to manage budget virement with approval workflow, so that budget discipline is maintained. | Must | FIN |
| US-FM-03 | As a Finance Manager, I want to generate financial statements (P&L, BS, CF) automatically from sub-ledgers, so that reporting is fast and accurate. | Must | FIN |

### 3.10 Sustainability/Compliance Officer
| US ID | User Story | Priority | Module |
|-------|------------|----------|--------|
| US-SC-01 | As a Sustainability Officer, I want to generate traceability reports from block to customer on demand, so that ISPO/RSPO audits are smooth. | Must | GSC, BIA |
| US-SC-02 | As a Compliance Officer, I want automated alerts for permit expiries and regulatory deadlines, so that compliance is proactive. | Must | GSC |
| US-SC-03 | As a K3 Officer, I want to record incidents, inspections, and corrective actions with regulatory reporting, so that workplace safety is managed. | Must | GSC, HRM |

### 3.11 General Manager / Director
| US ID | User Story | Priority | Module |
|-------|------------|----------|--------|
| US-GM-01 | As a General Manager, I want an executive dashboard with key KPIs (yield, cost, margin, safety), so that I have strategic visibility. | Must | BIA |
| US-GM-02 | As a Director, I want to ask the AI Assistant questions like "Why is Estate X yield down?" and get evidence-based answers, so that I make informed decisions. | Must | BIA (AI) |

---

## 4. Use Cases

### UC-01: Daily Harvest Recording (Core Flow)

**Actors:** Harvester, Field Supervisor, System
**Preconditions:** Harvest schedule published, harvester assigned to block
**Postconditions:** Harvest ticket created, productivity calculated, TPH updated

| Step | Actor | Action | System Response |
|------|-------|--------|-----------------|
| 1 | Harvester | Opens mobile app, views assignment | Shows block, quota, interval |
| 2 | Harvester | Starts harvest round (GPS timestamp) | Records start time, location |
| 3 | Harvester | For each bunch: records weight, grade (optional photo) | Accumulates bunch count, weight |
| 4 | Harvester | Records loose fruit collected | Updates loose fruit total |
| 5 | Harvester | Identifies restan (unharvested ripe bunches) with reason | Records restan count, reason code |
| 6 | Harvester | Ends round (GPS timestamp) | Calculates productivity (ton/man-day) |
| 7 | Field Supervisor | Reviews & approves on mobile | Validates data, flags anomalies |
| 8 | System | Generates harvest ticket (block, harvester, date, weight, grade, restan) | Ticket ID assigned |
| 9 | System | Updates TPH stock for transport planning | Real-time TPH dashboard |
| 10 | System | Calculates harvester premium (productivity, quality, attendance) | Premium accrual |
| 11 | System | Syncs to central DB (if offline) | Conflict resolution |

**Alternative Flows:**
- 3a: Offline mode → local storage → sync when online
- 7a: Supervisor rejects → returns to harvester with comments
- 5a: Restan > 5% → auto-alert to Estate Manager & Agronomist

---

### UC-02: Fertilization Plan to Application (Agronomy Loop)

**Actors:** Agronomist, Field Supervisor, System
**Preconditions:** Soil/leaf analysis results available, fertilizer stock > 0
**Postconditions:** Application recorded, stock deducted, cost allocated, nutrient balance updated

| Step | Actor | Action | System Response |
|------|-------|--------|-----------------|
| 1 | Agronomist | Reviews soil/leaf analysis per block | Shows nutrient status, trends |
| 2 | Agronomist | Requests AI recommendation (optional) | AI suggests fertilizer type, rate, timing |
| 3 | Agronomist | Creates/approves fertilization plan (block, round, fertilizer, rate, schedule) | Plan saved, WOs generated |
| 4 | System | Generates Work Orders per block/round | Assigns to Field Supervisors |
| 5 | Field Supervisor | Receives WO on mobile, reviews | Shows plan vs previous actuals |
| 6 | Field Supervisor | Executes application: records actual rate, GPS, weather, photos | Validates vs plan (BR-E-03) |
| 7 | System | Auto-deducts fertilizer from inventory (FIFO/FEFO) | Stock update, min-stock check |
| 8 | System | Allocates cost to cost center (material + labor) | Cost accounting entry |
| 9 | System | Updates nutrient balance (applied vs removal vs requirement) | Balance per block |
| 10 | System | Links to harvest yield for correlation analysis | Data for next cycle |

**Alternative Flows:**
- 2a: No AI → manual entry based on SOP
- 6a: Actual deviates > 10% from plan → requires justification
- 7a: Stock insufficient → alerts procurement, partial application recorded

---

### UC-03: Transport Dispatch & Weighbridge Sync

**Actors:** Transport Manager, Driver, Weighbridge System, Mill
**Preconditions:** TPH has FFB, vehicles/drivers available, mill accepting
**Postconditions:** Trip completed, weight recorded, mill receipt, KPIs updated

| Step | Actor | Action | System Response |
|------|-------|--------|-----------------|
| 1 | Transport Manager | Views TPH stock & mill schedule | Shows volume, grades, mill slots |
| 2 | Transport Manager | Creates dispatch plan (vehicle, driver, TPH, mill, ETA) | Optimizes load, route |
| 3 | Driver | Receives dispatch on mobile, starts trip | GPS tracking begins |
| 4 | Driver | Arrives at TPH, loads FFB (loader records weight) | Loading record, TPH stock decrement |
| 5 | Driver | Departs for mill, GPS tracked | Real-time location |
| 6 | Weighbridge | Truck arrives, auto-weighs (gross, tare, net) | Weight ticket, grade, source block |
| 7 | Mill | Receives FFB, records quality grade | Mill reception log |
| 8 | System | Matches dispatch → weighbridge → mill reception | Trip completion, variance check |
| 9 | System | Calculates transport KPIs (cost/ton, time, fuel) | Updates dashboards |
| 10 | System | Allocates FFB to source block for rendement allocation | Block-level OER/KER |

**Alternative Flows:**
- 6a: Weighbridge offline → manual entry → sync later
- 8a: Weight variance > 2% → investigation workflow
- 3a: Driver delay → auto-reassign or notify manager

---

### UC-04: Procurement PR-to-Payment

**Actors:** Requestor, Approvers, Procurement, Vendor, Warehouse, Finance
**Preconditions:** Need identified, budget available
**Postconditions:** Goods received, invoice paid, vendor scorecard updated

| Step | Actor | Action | System Response |
|------|-------|--------|-----------------|
| 1 | Requestor | Creates PR (item, qty, spec, budget code, urgency) | Budget check (BR-J-03) |
| 2 | System | Routes PR per approval matrix (value-based) | Notifies approvers |
| 3 | Approvers | Approve/Reject with comments | Workflow progresses |
| 4 | Procurement | Converts approved PR to PO, selects vendor (3 quotes if >50M) | PO generated |
| 5 | Procurement | Sends PO to vendor via portal | Vendor notified |
| 6 | Vendor | Acknowledges PO, confirms delivery date | PO status updated |
| 7 | Warehouse | Receives goods, inspects, records GR (mobile, barcode) | GR linked to PO |
| 8 | Finance | Receives invoice, system does 3-way match (PO, GR, Invoice) | Match/Exception |
| 9 | Finance | If match → schedules payment per terms | Payment queue |
| 10 | Finance | Executes payment, posts to GL | AP cleared |
| 11 | System | Updates vendor scorecard (on-time, quality, qty accuracy) | Scorecard refreshed |
| 12 | System | Releases budget commitment | Budget available updated |

**Alternative Flows:**
- 8a: Match exception → discrepancy workflow (qty, price, quality)
- 4a: Emergency → GM + 1 Director approval, post-facto 3 quotes
- 7a: Quality fail → rejection note, vendor notified, replacement/return

---

### UC-05: AI Plantation Helper - Contextual Query

**Actors:** User (any role), AI System
**Preconditions:** User authenticated, context available (page, filters, data scope)
**Postconditions:** AI insight delivered with evidence, citations, confidence

| Step | Actor | Action | System Response |
|------|-------|--------|-----------------|
| 1 | User | Opens AI Assistant on any page (dashboard, block detail, report) | Context captured (estate, block, date range, KPIs) |
| 2 | User | Asks question (e.g., "Why is Block A05 yield down 15%?") | NLP parses intent, entities |
| 3 | System | Builds context: relevant data (harvest, fert, soil, weather, pest) | Data retrieval per scope |
| 4 | System | Runs deterministic checks: KPI thresholds, business rules, anomalies | Flags deviations |
| 5 | System | Retrieves knowledge: SOPs, manuals, historical cases (RAG) | Relevant chunks with citations |
| 6 | LLM | Analyzes: problem, evidence, root cause hypotheses, recommendations | Structured insight |
| 7 | System | Validates: no hallucination, citations match, guardrails pass | Quality gate |
| 8 | User | Receives insight: Problem, Evidence, Root Cause, Recommendation, Priority, Confidence | Formatted response |
| 9 | User | Rates helpfulness, adds feedback | Feedback stored for eval |
| 10 | System | Logs interaction for audit & model improvement | Audit trail |

**Alternative Flows:**
- 7a: Guardrail fail → fallback to deterministic answer + "consult expert"
- 4a: Insufficient data → "Missing information: need soil analysis for Block A05"
- 2a: Out of scope (e.g., legal advice) → "I cannot answer, consult legal dept"

---

## 5. Acceptance Criteria (Given/When/Then)

### AC-HVST-01: Harvest Recording
**Given** a harvester is assigned to Block A05 on 2025-01-15 with quota 2.0 ton
**When** the harvester records 45 bunches totaling 1,950 kg with 95% ripe grade and 50 kg loose fruit
**Then** the system creates a harvest ticket with ticket ID, calculates productivity 1.95 ton/man-day, updates TPH stock, and flags restan if any

### AC-HVST-02: Restan Alert
**Given** restan recorded > 5% of potential bunches for a block
**When** the field supervisor approves the harvest ticket
**Then** the system sends real-time alert to Estate Manager and Agronomist with block, date, restan %, reason codes

### AC-AGR-01: Fertilization Plan vs Actual
**Given** a fertilization plan for Block B12 Round 3: Urea 1.5 kg/palm, MOP 1.0 kg/palm
**When** field supervisor records actual: Urea 1.4 kg/palm, MOP 1.0 kg/palm, weather: light rain
**Then** system calculates variance (-6.7% Urea), deducts stock via FIFO, allocates cost, updates nutrient balance, flags variance for agronomist review

### AC-TRN-01: Weighbridge Sync
**Given** a dispatch for Vehicle B-1234 to Mill with estimated 22 ton
**When** weighbridge records gross 32,500 kg, tare 10,200 kg, net 22,300 kg
**Then** system matches to dispatch (variance +1.4%), creates trip record, updates transport KPIs, allocates 22.3 ton to source blocks per loading plan

### AC-INV-01: Min-Stock Auto PR
**Given** fertilizer Urea stock at Warehouse Gudang Pusat = 4.5 ton, Min = 5 ton, Safety = 2 ton
**When** stock drops below 7 ton (Min + Safety) after a GI
**Then** system auto-generates PR for Urea 20 ton (based on reorder qty), routes for approval, notifies procurement

### AC-PRC-01: 3-Way Match
**Given** PO-2025-001 for Urea 20 ton @ IDR 8,500/kg, GR-2025-001 received 19.8 ton (quality pass), Invoice-2025-001 for 19.8 ton @ IDR 8,500/kg
**When** finance processes invoice
**Then** system auto-matches (qty tolerance ±2%, price exact), schedules payment per Net 30, posts to GL, releases budget commitment

### AC-BIA-01: AI Insight Quality
**Given** user asks "Why is Afdeling 3 yield down?" with context: Estate 1, Afdeling 3, last 3 months
**When** AI processes query
**Then** response includes: (1) Problem statement with data, (2) Evidence: harvest, fert, pest, weather data, (3) Root cause hypotheses ranked by likelihood, (4) Recommendations with immediate/preventive actions, (5) Priority, Confidence, (6) Citations to SOPs/data sources, (7) Missing information list

### AC-MILL-01: Rendement by Source Block
**Given** Mill processes 500 ton FFB from 5 source blocks in a shift
**When** shift ends with CPO 110 ton, Kernel 24 ton
**Then** system calculates OER 22.0%, KER 4.8%, allocates to source blocks per weighbridge tickets, updates block-level rendement dashboard

### AC-HRM-01: Attendance & Payroll
**Given** harvester worked 25 days, 2 days leave, 10 hours OT in January
**When** payroll runs for January
**Then** system calculates: base pay (25 days), leave pay (2 days), OT pay (10 hrs × 1.5×), harvest premium (based on productivity), deductions, net pay

---

## 6. Prioritization (MoSCoW + Value vs Effort + Risk)

### 6.1 MoSCoW Summary

| Priority | Count | Description |
|----------|-------|-------------|
| **Must Have** | 85 | Core business operations, compliance, revenue-critical |
| **Should Have** | 32 | Important enhancements, efficiency, quality |
| **Could Have** | 12 | Nice-to-have, advanced analytics, AI advanced |
| **Won't Have (v1)** | 8 | Deferred to Phase 2+ (full HR payroll, advanced MES, RSPO, predictive) |

### 6.2 Value vs Effort Matrix (Top 20 Must-Have)

| FR ID | Title | Business Value | Effort | Quadrant | Sprint Target |
|-------|-------|----------------|--------|----------|---------------|
| FR-MDM-01 | Master Data Hierarchy | Critical | Medium | High Value / Med Effort | Sprint 1-2 |
| FR-MDM-15 | RBAC + Data Scope | Critical | High | High Value / High Effort | Sprint 2-3 |
| FR-HVST-03 | Mobile Harvest Recording | Critical | High | High Value / High Effort | Sprint 3-5 |
| FR-HVST-04 | Harvester Productivity | Critical | Medium | High Value / Med Effort | Sprint 4-5 |
| FR-TRN-05 | Trip + Weighbridge Sync | Critical | High | High Value / High Effort | Sprint 4-6 |
| FR-MILL-01 | Weighbridge + Source Allocation | Critical | High | High Value / High Effort | Sprint 5-7 |
| FR-MILL-05 | Rendement Calculation | Critical | Medium | High Value / Med Effort | Sprint 6-7 |
| FR-INV-02 | Mobile GR/GI + Barcode | Critical | Medium | High Value / Med Effort | Sprint 3-4 |
| FR-INV-07 | Min/Max/Safety Stock + Auto PR | High | Medium | High Value / Med Effort | Sprint 4-5 |
| FR-PRC-01 | PR-PO Workflow + Budget | High | Medium | High Value / Med Effort | Sprint 3-4 |
| FR-PRC-08 | 3-Way Match | High | Medium | High Value / Med Effort | Sprint 5-6 |
| FR-AGR-01 | Fertilization Plan + AI Rec | High | High | High Value / High Effort | Sprint 6-8 |
| FR-AGR-03 | Mobile Fert Application | High | Medium | High Value / Med Effort | Sprint 5-6 |
| FR-AGR-05 | Pest/Disease Monitoring | High | Medium | High Value / Med Effort | Sprint 5-6 |
| FR-FIN-09 | Cost Accounting (ha, kg FFB, kg CPO) | Critical | High | High Value / High Effort | Sprint 7-9 |
| FR-BIA-01 | Operational Dashboards | Critical | Medium | High Value / Med Effort | Sprint 4-6 |
| FR-BIA-07 | KPI Monitoring + Alerts | Critical | Medium | High Value / Med Effort | Sprint 5-6 |
| FR-BIA-10 | AI Plantation Helper (Core) | High | Very High | High Value / Very High Effort | Sprint 10-14 |
| FR-GSC-06 | Traceability Engine | Critical | High | High Value / High Effort | Sprint 8-10 |
| FR-HRM-05 | Attendance (Mobile/Biometric) | High | Medium | High Value / Med Effort | Sprint 3-4 |

### 6.3 Risk-Adjusted Prioritization

| Risk Factor | Affected FRs | Mitigation |
|-------------|--------------|------------|
| **Offline complexity** | HVST-03, AGR-03, INV-02, HRM-05 | Build sync engine first, test extensively |
| **Weighbridge integration** | TRN-05, MILL-01 | Early vendor engagement, adapter pattern |
| **Data migration quality** | All MDM | Cleansing sprint before go-live |
| **AI hallucination** | BIA-10, BIA-11 | Guardrails, eval framework, human-in-loop |
| **Change resistance** | All field modules | Champions, training, phased rollout |

---

## 7. Product Backlog (Sprint-Ready)

### Sprint 1-2: Foundation & Master Data
| Rank | Item | Type | Est (SP) | Dependencies |
|------|------|------|----------|--------------|
| 1 | Project setup: Laravel, Livewire, Tailwind, Auth, RBAC | Tech | 13 | - |
| 2 | Master Data: Company, Estate, Afdeling, Block (CRUD + GIS) | Feature | 21 | 1 |
| 3 | Master Data: Employee, Position, Org Hierarchy | Feature | 13 | 1 |
| 4 | Master Data: Material, Warehouse, Cost Center | Feature | 13 | 1 |
| 5 | User Management + Role/Permission + Data Scope | Feature | 21 | 1, 3 |
| 6 | Audit Trail Infrastructure | Tech | 8 | 1 |
| 7 | API Documentation (OpenAPI) | Tech | 5 | 1 |

### Sprint 3-4: Harvest & Inventory Core
| Rank | Item | Type | Est (SP) | Dependencies |
|------|------|------|----------|--------------|
| 8 | Harvest Planning & Assignment (Web) | Feature | 13 | 2, 3 |
| 9 | Mobile Harvest Recording (Offline) | Feature | 34 | 2, 8 |
| 10 | Harvest Ticket + Productivity Calc | Feature | 8 | 9 |
| 11 | TPH Management | Feature | 8 | 9 |
| 12 | Inventory: GR/GI Mobile + Barcode | Feature | 21 | 4 |
| 13 | Stock Opname + Variance Workflow | Feature | 13 | 12 |
| 14 | Min/Max/Safety Stock + Auto PR | Feature | 13 | 12 |

### Sprint 5-6: Transport & Agronomy
| Rank | Item | Type | Est (SP) | Dependencies |
|------|------|------|----------|--------------|
| 15 | Transport Planning & Dispatch | Feature | 13 | 11 |
| 16 | Trip Recording + GPS + Weighbridge Sync | Feature | 34 | 10, 15 |
| 17 | Fuel Management | Feature | 8 | 16 |
| 18 | Fertilization Planning + Work Orders | Feature | 21 | 2, 4 |
| 19 | Mobile Fertilizer Application | Feature | 21 | 18 |
| 20 | Pest/Disease Monitoring + Threshold Alerts | Feature | 13 | 2 |

### Sprint 7-8: Mill & Finance
| Rank | Item | Type | Est (SP) | Dependencies |
|------|------|------|----------|--------------|
| 21 | Weighbridge Integration + Source Allocation | Feature | 21 | 16 |
| 22 | Rendement Calculation (OER, KER, Losses) | Feature | 13 | 21 |
| 23 | Mill Dashboard (Throughput, Downtime, Quality) | Feature | 13 | 22 |
| 24 | Cost Accounting Engine (per ha, kg FFB, kg CPO) | Feature | 34 | 10, 22 |
| 25 | Budget Management + Virement | Feature | 13 | 4 |
| 26 | 3-Way Match (PO, GR, Invoice) | Feature | 13 | 14, 25 |

### Sprint 9-10: Procurement, HR, Compliance
| Rank | Item | Type | Est (SP) | Dependencies |
|------|------|------|----------|--------------|
| 27 | PR-PO Workflow + Approval Matrix | Feature | 21 | 14 |
| 28 | Vendor Portal + Scorecard | Feature | 13 | 27 |
| 29 | Attendance (Mobile/Biometric) + Payroll Integration | Feature | 21 | 3 |
| 30 | Leave, OT, Premium Calculation | Feature | 13 | 29 |
| 31 | Traceability Engine (Block → Customer) | Feature | 34 | 10, 21, 26 |
| 32 | ISPO Evidence Auto-Generation | Feature | 13 | 31 |
| 33 | K3 Incident + Inspection Management | Feature | 13 | 3 |

### Sprint 11-14: BI & AI
| Rank | Item | Type | Est (SP) | Dependencies |
|------|------|------|----------|--------------|
| 34 | Operational Dashboards (Role-based) | Feature | 21 | 10, 16, 22, 24 |
| 35 | Management Dashboard + Drill-down | Feature | 13 | 34 |
| 36 | KPI Engine + Threshold Alerts | Feature | 13 | 34 |
| 37 | Report Builder (Scheduled/Ad-hoc) | Feature | 13 | 34 |
| 38 | AI Knowledge Base Ingestion (SOPs, Manuals) | Feature | 21 | - |
| 39 | AI Context Builder + RAG Retrieval | Feature | 34 | 38 |
| 40 | AI Insight Generator + Guardrails | Feature | 34 | 39 |
| 41 | AI Evaluation Framework | Feature | 13 | 40 |

---

## 8. Traceability Matrix (Sample)

| Business Rule | Functional Req | User Story | Use Case | Acceptance Criteria | Test Case |
|---------------|----------------|------------|----------|---------------------|-----------|
| BR-F-01 (Interval 7-10d) | FR-HVST-01 | US-EM-04 | UC-01 | AC-HVST-02 | TC-HVST-005 |
| BR-E-03 (Max 3kg/palm) | FR-AGR-03 | US-AG-01 | UC-02 | AC-AGR-01 | TC-AGR-003 |
| BR-G-01 (Trip < 4hr) | FR-TRN-05 | US-TM-02 | UC-03 | AC-TRN-01 | TC-TRN-007 |
| BR-H-02 (OER > 20.5%) | FR-MILL-05 | US-MM-01 | UC-05 | AC-MILL-01 | TC-MILL-004 |
| BR-I-01 (Reorder at Min+Safety) | FR-INV-07 | US-WK-02 | - | AC-INV-01 | TC-INV-009 |
| BR-J-03 (Budget Check) | FR-PRC-01, FR-PRC-04 | US-PO-01 | UC-04 | AC-PRC-01 | TC-PRC-002 |
| 7.2 AI Insight Format | FR-BIA-11 | US-GM-02 | UC-05 | AC-BIA-01 | TC-BIA-010 |

---

## 9. Assumptions & Constraints (Requirements Level)

| ID | Assumption/Constraint | Impact if Wrong |
|----|----------------------|-----------------|
| RA-01 | Client provides cleaned master data before Sprint 1 | Delay in all modules; need cleansing sprint |
| RA-02 | Weighbridge vendors support standard API/CSV export | Custom adapters needed per vendor |
| RA-03 | Field staff have Android devices (min API 28) | Need device procurement budget |
| RA-04 | Internet at estates supports daily sync (4G/VSAT) | Offline-first critical, larger local DB |
| RA-05 | Existing accounting system has API or standard import | Manual journal entry fallback |
| RA-06 | One developer per 2-3 modules (team of 5-6) | Timeline extends if team smaller |
| RA-07 | Domain experts available 2 days/week for validation | Sprint reviews delayed, rework risk |
| RA-08 | AI model (LLM) hosted on-premise or approved cloud | Data residency compliance |

---

## 10. Acceptance Criteria for Phase 2

| Criteria | Description | Verification |
|----------|-------------|--------------|
| AC-2.1 | All 14 modules have functional requirements traced to Phase 1 processes | Traceability matrix review |
| AC-2.2 | Non-functional requirements cover performance, security, offline, AI quality | NFR review with architects |
| AC-2.3 | User stories cover all 11 key roles with clear benefit statements | Role coverage matrix |
| AC-2.4 | Top 5 core use cases documented with main/alternative flows | Use case walkthrough |
| AC-2.5 | Acceptance criteria written in GWT format for all Must-Have FRs | GWT review with QA |
| AC-2.6 | Prioritization uses MoSCoW + Value/Effort + Risk with stakeholder sign-off | Prioritization workshop minutes |
| AC-2.7 | Product backlog estimated (Story Points) and sequenced for 14 sprints | Sprint planning readiness |

---

## 11. Next Steps (Phase 3 Preview)

1. **Domain Analysis** - Aggregate entities, define bounded contexts
2. **Database Design** - ERD, dictionary, migration strategy
3. **System Architecture** - Modular monolith, module boundaries, API contracts
4. **Authorization Design** - RBAC matrix, data scope rules, policies
5. **API Design** - RESTful + WebSocket for real-time, versioning
6. **AI Architecture** - Pipeline, RAG, guardrails, evaluation
7. **ADRs** - Key architectural decisions documented

---

## 12. Approval

| Role | Name | Signature | Date |
|------|------|-----------|------|
| Business Analyst Lead | | | |
| Technical Lead / Architect | | | |
| Product Owner (Client) | | | |
| Project Manager | | | |
| QA Lead | | | |
| AI Engineer | | | |

---

*Document Version: 1.0 | Phase 2 - Requirements Engineering*
*Generated as part of AI-Powered Integrated Palm Oil Plantation MIS Project*