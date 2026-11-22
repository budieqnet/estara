# UI/UX Design Document
## AI-Powered Integrated Palm Oil Plantation Management Information System

**Version:** 1.0 (Template)
**Date:** 2025-01-15
**Phase:** 4 — UI/UX Design
**Status:** Draft

---

## 1. User Flows

### 1.1 Core User Journeys by Role

#### Estate Manager Journey
```
Login → Executive Dashboard → 
  ├─ Yield Overview (Estate/Afdeling/Block) → Drill-down to Block Detail
  ├─ Harvest Monitoring → Daily Assignment → Approve Tickets
  ├─ Agronomy → Fertilization Plan vs Actual → Variance Analysis
  ├─ Transport → TPH Status → Dispatch Optimization
  ├─ Cost Analysis → Cost/Ha by Category → Budget Variance
  └─ AI Assistant → "Why is Afdeling 3 yield down?" → Insight + Actions
```

#### Field Supervisor (Mandor) Journey
```
Login (Mobile) → Field Dashboard →
  ├─ Today's Assignments → View Harvester/Gang Tasks
  ├─ Harvest Recording → Record Bunches/Weight/Grade/Restan (Offline)
  ├─ Fertilizer Application → Verify Actual vs Plan + Photos
  ├─ Pest/Disease Scout → Report Findings + GPS + Photos
  ├─ Attendance → Mark Worker Present/Absent
  └─ Sync → Push to Server when Online
```

#### Harvester Journey
```
Login (Mobile) → My Assignment →
  ├─ View Block, Quota, Interval
  ├─ Start Round → GPS Timestamp
  ├─ Record Each Bunch → Weight + Grade (Quick Tap)
  ├─ Record Loose Fruit → Quick Entry
  ├─ Mark Restan → Count + Reason
  ├─ End Round → Auto Productivity Calc
  └─ View My Performance → Trend + Premium Estimate
```

#### Agronomist Journey
```
Login → Agronomy Dashboard →
  ├─ Soil/Leaf Analysis → View Trends per Block
  ├─ Fertilization Planning → AI Recommendation → Create Plan
  ├─ Work Orders → Assign to Supervisors
  ├─ Application Monitoring → Actual vs Plan + Variance Alerts
  ├─ Pest/Disease Surveillance → Heatmap + Threshold Alerts
  ├─ Nutrient Balance → Applied vs Removal vs Requirement
  └─ Yield Correlation → Fertilizer Impact Analysis
```

#### Transport Manager Journey
```
Login → Transport Dashboard →
  ├─ TPH Overview → Stock Levels + Loading Schedule
  ├─ Dispatch Planning → Auto-Optimize Vehicle/Driver/Route
  ├─ Live Tracking → GPS Map + Trip Status
  ├─ Weighbridge Sync → Auto-Match Dispatch ↔ Weight
  ├─ Fuel Monitoring → Consumption vs Benchmark
  ├─ Vehicle Utilization → Operating Hours + Downtime
  └─ Cost Analysis → Cost/Ton-Km Breakdown
```

#### Mill Manager Journey
```
Login → Mill Dashboard →
  ├─ Real-time OER/KER → By Source Block
  ├─ Throughput → Ton/Hour + Target
  ├─ Downtime → Current + History + Root Cause
  ├─ Quality Lab → FFA, Moisture, POME BOD + Spec Alerts
  ├─ Inventory → Tank Stock + Dispatch Schedule
  └─ Losses → Category Breakdown + Trend
```

#### Warehouse Keeper Journey
```
Login (Mobile/Desktop) → Warehouse Dashboard →
  ├─ Stock Overview → Real-time Levels by Category
  ├─ GR → Scan Barcode → Inspect → Confirm (Auto PO Match)
  ├─ GI → Pick List → Scan → Confirm (FIFO/FEFO)
  ├─ Opname → Cycle Count → Variance → Adjustment
  ├─ Min-Stock Alerts → Auto PR Generation
  └─ Reports → Stock Card + Aging + Dead Stock
```

#### AI Assistant Journey (Cross-Role)
```
Any Page → Click AI Button (Floating) →
  ├─ Context Auto-Captured (Page, Filters, User Scope)
  ├─ Ask Question → "Why is Block A05 yield down 15%?"
  ├─ AI Processes → Data + Rules + RAG → Structured Insight
  ├─ Response: Problem | Evidence | Root Causes | Recommendations | Priority | Confidence | Citations
  ├─ Actions: Create Task | View Report | Ask Follow-up
  └─ Feedback: Helpful/Not Helpful → Improves Model
```

---

## 2. Information Architecture & Sitemap

### 2.1 Global Navigation Structure

```
┌─────────────────────────────────────────────────────────────────────────────┐
│  HEADER: Logo | Global Search | Notifications | User Menu | AI Assistant   │
├─────────────────────────────────────────────────────────────────────────────┤
│  SIDE NAV (Collapsible)                                                     │
│  ┌─────────────────────────────────────────────────────────────────────────┐ │
│  │ DASHBOARD                    ← Role-based default                       │ │
│  ├─ PLANTATION OPERATIONS                                                │ │
│  │   ├─ Blocks & Boundaries                                               │ │
│  │   ├─ Planting & Replanting                                             │ │
│  │   ├─ Nursery Management                                                │ │
│  │   ├─ Agronomy                                                          │ │
│  │   │   ├─ Fertilization Plans                                           │ │
│  │   │   ├─ Applications                                                  │ │
│  │   │   ├─ Pest & Disease Monitoring                                     │ │
│  │   │   ├─ Weed Control                                                  │ │
│  │   │   ├─ Field Inspections                                             │ │
│  │   │   └─ Recommendations (AI)                                          │ │
│  │   └─ Growth Monitoring (TBM/TM)                                        │ │
│  ├─ HARVEST & TRANSPORT                                                  │ │
│  │   ├─ Harvest Schedule & Assignment                                     │ │
│  │   ├─ Harvest Recording                                                │ │
│  │   ├─ Productivity & Restan                                             │ │
│  │   ├─ TPH Management                                                    │ │
│  │   ├─ Transport Planning & Dispatch                                     │ │
│  │   ├─ Trip Tracking (GPS)                                               │ │
│  │   ├─ Weighbridge Tickets                                               │ │
│  │   └─ Vehicle & Driver Management                                       │ │
│  ├─ MILL OPERATIONS                                                      │ │
│  │   ├─ Weighbridge & Reception                                           │ │
│  │   ├─ Production Monitoring                                            │ │
│  │   ├─ Quality Lab                                                      │ │
│  │   ├─ Mill Inventory                                                   │ │
│  │   ├─ Maintenance & Downtime                                           │ │
│  │   └─ Waste Management (POME/EFB)                                      │ │
│  ├─ INVENTORY & PROCUREMENT                                              │ │
│  │   ├─ Stock Overview (Multi-Warehouse)                                 │ │
│  │   ├─ Goods Receipt / Issue / Transfer                                  │ │
│  │   ├─ Stock Opname & Adjustments                                       │ │
│  │   ├─ Purchase Requests & Orders                                       │ │
│  │   ├─ Vendor Management                                                │ │
│  │   └─ 3-Way Match & Payments                                           │ │
│  ├─ HUMAN RESOURCES                                                      │ │
│  │   ├─ Employee Directory                                               │ │
│  │   ├─ Attendance & Shifts                                              │ │
│  │   ├─ Work Assignments                                                 │ │
│  │   ├─ Payroll & Premiums                                               │ │
│  │   ├─ Leave & Overtime                                                 │ │
│  │   ├─ Training & Competency                                            │ │
│  │   └─ K3 (Safety)                                                      │ │
│  ├─ FINANCE & ACCOUNTING                                                 │ │
│  │   ├─ Budget Management                                                │ │
│  │   ├─ Cost Accounting (Ha, Kg FFB, Kg CPO)                            │ │
│  │   ├─ General Ledger                                                   │ │
│  │   ├─ Accounts Payable / Receivable                                    │ │
│  │   ├─ Cash Flow                                                        │ │
│  │   └─ Financial Reports                                                │ │
│  ├─ SALES & CONTRACTS                                                    │ │
│  │   ├─ Customers & Contracts                                            │ │
│  │   ├─ Sales Orders & Delivery                                          │ │
│  │   ├─ Invoicing & Collection                                           │ │
│  │   └─ Customer Profitability                                           │ │
│  ├─ COMPLIANCE & SUSTAINABILITY                                          │ │
│  │   ├─ Permits & Legal Register                                         │ │
│  │   ├─ ISPO/RSPO Certification                                          │ │
│  │   ├─ Traceability (Block → Customer)                                  │ │
│  │   ├─ Environmental Monitoring                                         │ │
│  │   ├─ K3 Incidents & Inspections                                       │ │
│  │   └─ Risk Management                                                  │ │
│  ├─ BUSINESS INTELLIGENCE                                                │ │
│  │   ├─ Operational Dashboards                                           │ │
│  │   ├─ Management Dashboards                                            │ │
│  │   ├─ Report Builder                                                   │ │
│  │   ├─ KPI Monitoring & Alerts                                          │ │
│  │   └─ AI Insights History                                              │ │
│  └─ ADMINISTRATION (Role: Admin)                                         │
│      ├─ Master Data Management                                           │
│      ├─ User & Role Management                                           │
│      ├─ System Configuration                                             │
│      ├─ Audit Logs                                                       │
│      └─ AI Knowledge Base Management                                     │
│  └─────────────────────────────────────────────────────────────────────────┘ │
└─────────────────────────────────────────────────────────────────────────────┘
```

### 2.2 Mobile Navigation (Bottom Tab Bar)

```
┌─────────────────────────────────────────────┐
│  [Dashboard] [Tasks] [Record] [Sync] [More] │
└─────────────────────────────────────────────┘

Dashboard → Role-specific KPI cards + Quick Actions
Tasks     → My Assignments (Harvest, Fertilizer, Scout, etc.)
Record    → Quick Capture (Harvest, Application, Pest, Attendance)
Sync      → Offline Status + Manual Sync Button
More      → Profile, Settings, Help, Switch Role
```

---

## 3. Dashboard Design

### 3.1 Dashboard Types by Role

| Role | Dashboard Name | Key Widgets | Refresh |
|------|----------------|-------------|---------|
| **General Manager** | Executive Dashboard | Yield Trend, Cost/Ha, Margin, Safety LTIFR, AI Alerts Summary | 5 min |
| **Estate Manager** | Estate Operations | Harvest vs Target, Restan %, Fert Variance, Transport Cost, Block Health Map | 5 min |
| **Afdeling Manager** | Afdeling Operations | Daily Harvest, Harvester Productivity, Interval Compliance, Restan Detail | Real-time |
| **Agronomist** | Agronomy Intelligence | Soil Nutrient Map, Fert Plan vs Actual, Pest Heatmap, Yield Correlation, AI Recs | 15 min |
| **Field Supervisor** | Field Mobile Dashboard | Today's Tasks, Quick Record Buttons, Team Attendance, Offline Status | Manual |
| **Harvester** | Harvester Mobile | My Block, Quota, Bunches Recorded, Productivity, Premium Estimate | Manual |
| **Transport Manager** | Transport Command | TPH Stock, Live Vehicle Map, Trip Status, Fuel Efficiency, Cost/Ton-Km | Real-time |
| **Driver** | Driver Mobile | My Trip, Route, Load Weight, Next TPH, Fuel Log | Real-time |
| **Mill Manager** | Mill Operations | OER/KER Gauge, Throughput, Downtime Pareto, Quality Specs, Tank Levels | Real-time |
| **Weighbridge Op** | Weighbridge Station | Current Truck, Auto Weight, Grade, Source Block, Print Ticket | Real-time |
| **Lab Technician** | Lab Dashboard | Sample Queue, Test Results, Spec Pass/Fail, Trend Charts | 5 min |
| **Warehouse Keeper** | Warehouse Dashboard | Stock Levels, Min-Stock Alerts, GR/GI Queue, Opname Schedule | 5 min |
| **Procurement** | Procurement Dashboard | PR Pipeline, PO Status, Vendor Scorecards, Budget Utilization | 15 min |
| **Finance Manager** | Finance Dashboard | Cost/Ha, Cost/Kg FFB, Cost/Kg CPO, Budget Variance, Cash Position | Daily |
| **Sales Manager** | Sales Dashboard | Order Book, Delivery Schedule, Receivables Aging, Customer Margin | Daily |
| **Sustainability** | Compliance Dashboard | Permit Expiry, ISPO Evidence Status, Traceability Coverage, K3 Incidents | Daily |

### 3.2 Executive Dashboard Layout (Desktop)

```
┌─────────────────────────────────────────────────────────────────────────────┐
│  [Logo]  ESTARA MIS                    [Search] [🔔] [👤] [🤖 AI]          │
├─────────────────────────────────────────────────────────────────────────────┤
│  SIDE NAV |                                                                 │
│           │  ┌──────────────┐ ┌──────────────┐ ┌──────────────┐ ┌────────┐ │
│           │  │ FFB YIELD    │ │ COST/HA      │ │ OPERATING    │ │ SAFETY │ │
│           │  │ 24.5 ton/ha  │ │ IDR 18.2M    │ │ MARGIN 22%   │ │ LTIFR 0│ │
│           │  │ ▲ +3.2% YoY  │ │ ▼ -1.5% MoM  │ │ ▲ +0.8%      │ │ ✓ Target│ │
│           │  └──────────────┘ └──────────────┘ └──────────────┘ └────────┘ │
│           │                                                                 │
│           │  ┌──────────────────────────────────────────────────────────┐  │
│           │  │ YIELD TREND (12 Months)                    [Estate ▼]    │  │
│           │  │ ████████████████████████ 25.0                            │  │
│           │  │ ██████████████████████   24.5  Target ─────────────────  │  │
│           │  │ ████████████████████     24.0                            │  │
│           │  │     J  F  M  A  M  J  J  A  S  O  N  D                   │  │
│           │  └──────────────────────────────────────────────────────────┘  │
│           │                                                                 │
│           │  ┌─────────────────────┐ ┌─────────────────────────────────┐  │
│           │  │ AI ALERTS (3)       │ │ ESTATE PERFORMANCE HEATMAP      │  │
│           │  │ ⚠ Afdeling 3: Yield │ │ ┌──┬──┬──┬──┬──┬──┬──┬──┬──┬──┐ │  │
│           │  │   down 15% - View   │ │ │🟢│🟢│🟡│🟢│🔴│🟢│🟢│🟡│🟢│🟢│ │  │
│           │  │ ⚠ Fert Block B12:   │ │ │🟢│🟢│🟢│🟡│🟢│🟢│🟢│🟢│🟢│🟢│ │  │
│           │  │   20% under-applied │ │ │🟡│🟢│🟢│🟢│🟢│🟡│🟢│🟢│🟢│🟢│ │  │
│           │  │ ⚠ Restan Estate 2:  │ │ └──┴──┴──┴──┴──┴──┴──┴──┴──┴──┘ │  │
│           │  │   6.2% > 5% threshold│ │   A1  A2  A3  A4  A5  A6  A7  A8 │  │
│           │  └─────────────────────┘ └─────────────────────────────────┘  │
│           │                                                                 │
│           │  ┌─────────────────────┐ ┌─────────────────────────────────┐  │
│           │  │ COST BREAKDOWN      │ │ TRANSPORT EFFICIENCY            │  │
│           │  │ ████████ Fert 35%   │ │ Cost/Ton-Km: IDR 1,250          │  │
│           │  │ ██████ Harvest 28%  │ │ Fuel Eff: 3.2 km/L (Target 3.5) │  │
│           │  │ ████ Transport 18%  │ │ Vehicle Util: 78% (Target 80%)  │  │
│           │  │ █████ Maint 12%     │ │ Trips On-Time: 94%              │  │
│           │  │ ██ Other 7%         │ │                                 │  │
│           │  └─────────────────────┘ └─────────────────────────────────┘  │
└─────────────────────────────────────────────────────────────────────────────┘
```

### 3.3 Mobile Dashboard Layout (Field Supervisor)

```
┌─────────────────────────────────────┐
│  ☰  Field Supervisor - Estate 1     │
│  📅 2025-01-15  |  ☁️ Online        │
├─────────────────────────────────────┤
│  ⚡ QUICK ACTIONS                    │
│  ┌─────────┐ ┌─────────┐ ┌─────────┐ │
│  │ 🌴      │ │ 💊      │ │ 🐛      │ │
│  │ Harvest │ │ Fertil. │ │ Pest    │ │
│  │ Record  │ │ Apply   │ │ Scout   │ │
│  └─────────┘ └─────────┘ └─────────┘ │
│  ┌─────────┐ ┌─────────┐ ┌─────────┐ │
│  │ 👥      │ │ 📦      │ │ 🔄      │ │
│  │ Attend. │ │ Stock   │ │ Sync    │ │
│  └─────────┘ └─────────┘ └─────────┘ │
├─────────────────────────────────────┤
│  📋 TODAY'S ASSIGNMENTS (3)          │
│  ┌─────────────────────────────────┐ │
│  │ 🌴 Harvest - Block A05          │ │
│  │    3 Harvesters | Quota: 6.0 ton│ │
│  │    [View] [Start]               │ │
│  ├─────────────────────────────────┤ │
│  │ 💊 Fertilizer - Block B12       │ │
│  │    Urea 1.5kg | MOP 1.0kg       │ │
│  │    [View] [Start]               │ │
│  ├─────────────────────────────────┤ │
│  │ 🐛 Pest Scout - Afdeling 2      │ │
│  │    Route: A2-B1 → A2-B5         │ │
│  │    [View] [Start]               │ │
│  └─────────────────────────────────┘ │
├─────────────────────────────────────┤
│  ⚠ ALERTS (2)                        │
│  • Restan Block A03: 7.2%           │
│  • Fert Block B12 overdue 2 days    │
└─────────────────────────────────────┘
```

---

## 4. Wireframes - Key Screens

### 4.1 Harvest Recording (Mobile) - Critical Path

#### Screen 1: Assignment Selection
```
┌─────────────────────────────────────┐
│ ←  Harvest Recording          🔄    │
├─────────────────────────────────────┤
│  MY ASSIGNMENTS                      │
│  ┌─────────────────────────────────┐ │
│  │ 🌴 Block A05 - Afdeling 1       │ │
│  │    Variety: DxP | Year: 2018    │ │
│  │    Quota: 2.0 ton | Interval: 8d│ │
│  │    Last Harvest: 2025-01-07     │ │
│  │    [START ROUND]                │ │
│  └─────────────────────────────────┘ │
│  ┌─────────────────────────────────┐ │
│  │ 🌴 Block A08 - Afdeling 1       │ │
│  │    Variety: DxP | Year: 2019    │ │
│  │    Quota: 1.8 ton | Interval: 7d│ │
│  │    Last Harvest: 2025-01-08     │ │
│  │    [START ROUND]                │ │
│  └─────────────────────────────────┘ │
└─────────────────────────────────────┘
```

#### Screen 2: Active Harvest Round
```
┌─────────────────────────────────────┐
│ ←  Block A05          08:42  📍     │
├─────────────────────────────────────┤
│  ROUND IN PROGRESS                   │
│  Started: 07:30 | Duration: 1h 12m  │
│  ┌─────────────────────────────────┐ │
│  │ BUNCHES: 42        WEIGHT: 1,850 kg │
│  │ LOOSE FRUIT: 45 kg  RESTAN: 3      │
│  └─────────────────────────────────┘ │
│                                      │
│  ┌─────────────────────────────────┐ │
│  │ [+ BUNCH]   [+ LOOSE FRUIT]     │ │
│  │ [+ RESTAN]  [📷 PHOTO]          │ │
│  └─────────────────────────────────┘ │
│                                      │
│  QUICK GRADE:  [A] [B] [C] [D]      │
│                                      │
│  ┌─────────────────────────────────┐ │
│  │ [END ROUND]                     │ │
│  └─────────────────────────────────┘ │
└─────────────────────────────────────┘
```

#### Screen 3: Bunch Entry Modal
```
┌─────────────────────────────────────┐
│  ADD BUNCH                    ✕     │
├─────────────────────────────────────┤
│  Weight (kg)                         │
│  ┌─────────────────────────────────┐ │
│  │  4 5 . 0                        │ │
│  │  [1][2][3]  [+/-] [C]           │ │
│  │  [4][5][6]  [0] [.]             │ │
│  │  [7][8][9]  [⌫] [OK]            │ │
│  └─────────────────────────────────┘ │
│  Grade:  [A] [B] [C] [D]   (Default: B) │
│  ┌─────────────────────────────────┐ │
│  │ [SAVE BUNCH]                    │ │
│  └─────────────────────────────────┘ │
└─────────────────────────────────────┘
```

#### Screen 4: Round Summary & Submit
```
┌─────────────────────────────────────┐
│ ←  Round Summary              ✕     │
├─────────────────────────────────────┤
│  Block A05 | 2025-01-15 | Morning   │
│  ─────────────────────────────────  │
│  Total Bunches:     45              │
│  Total Weight:    1,980 kg          │
│  Loose Fruit:       52 kg           │
│  Restan:            3 bunches       │
│  Avg Bunch Weight:  44.0 kg         │
│  Productivity:      1.98 ton/man-day│
│  Grade Distribution: A:5 B:35 C:5 D:0│
│  ─────────────────────────────────  │
│  Weather: ☀️ Sunny | Soil: Dry       │
│  Notes: ___________________________ │
│  ─────────────────────────────────  │
│  [SAVE AS DRAFT]   [SUBMIT FOR APPROVAL] │
└─────────────────────────────────────┘
```

### 4.2 Fertilizer Application (Mobile)

```
┌─────────────────────────────────────┐
│ ←  Fertilizer Application    🔄     │
├─────────────────────────────────────┤
│  WORK ORDER: WO-FERT-2025-001234    │
│  Block B12 | Round 3 | 2025-01-15   │
│  ─────────────────────────────────  │
│  PLAN vs ACTUAL                      │
│  ┌─────────────┬────────┬────────┐  │
│  │ Fertilizer  │ Plan   │ Actual │  │
│  ├─────────────┼────────┼────────┤  │
│  │ Urea (46%N) │ 1.5 kg │ 1.4 kg │  │
│  │ MOP (60%K)  │ 1.0 kg │ 1.0 kg │  │
│  │ RP (28%P)   │ 0.5 kg │ 0.5 kg │  │
│  └─────────────┴────────┴────────┘  │
│  Variance: Urea -6.7% ⚠             │
│  ─────────────────────────────────  │
│  CONDITIONS                          │
│  Weather: [☀️] [🌧️] [☁️] [🌫️]       │
│  Soil Moisture: [Dry] [Moist] [Wet] │
│  Application Method: [Broadcast] [Band] [Circle] │
│  ─────────────────────────────────  │
│  EVIDENCE                            │
│  [📷 Photo 1] [📷 Photo 2] [📷 +]    │
│  ─────────────────────────────────  │
│  [SAVE DRAFT]        [SUBMIT]       │
└─────────────────────────────────────┘
```

### 4.3 Block Detail (Desktop) - Drill-down

```
┌─────────────────────────────────────────────────────────────────────────────┐
│  [← Back]  Block A05 - Estate 1, Afdeling 1                    [Edit] [AI]  │
├─────────────────────────────────────────────────────────────────────────────┤
│  TABS: [Overview] [Harvest] [Agronomy] [Planting] [Soil] [Costs] [Map] [AI] │
├─────────────────────────────────────────────────────────────────────────────┤
│  OVERVIEW                                                                      │
│  ┌──────────────┐ ┌──────────────┐ ┌──────────────┐ ┌──────────────┐        │
│  │ Area         │ │ Planted      │ │ Variety      │ │ Status       │        │
│  │ 28.5 ha      │ │ 2018         │ │ DxP (Sime)   │ │ Prime        │        │
│  └──────────────┘ └──────────────┘ └──────────────┘ └──────────────┘        │
│  ┌──────────────┐ ┌──────────────┐ ┌──────────────┐ ┌──────────────┐        │
│  │ Density      │ │ Total Palms  │ │ Productive   │ │ Last Census  │        │
│  │ 143/ha       │ │ 4,076        │ │ 3,920        │ │ 2024-06      │        │
│  └──────────────┘ └──────────────┘ └──────────────┘ └──────────────┘        │
│                                                                              │
│  ┌──────────────────────────────────────────────────────────────────────┐   │
│  │ YIELD TREND (24 Months)                                    [Export]  │   │
│  │ ████████████████████ 2.8 ton/ha/month                                │   │
│  │ ███████████████████  2.6  Target ─────────────────────────────────   │   │
│  │ ██████████████████   2.4                                             │   │
│  │     J  F  M  A  M  J  J  A  S  O  N  D  J  F  M  A  M  J  J  A  S  O │   │
│  └──────────────────────────────────────────────────────────────────────┘   │
│                                                                              │
│  ┌─────────────────────┐ ┌─────────────────────┐ ┌─────────────────────┐   │
│  │ LAST 3 HARVESTS     │ │ FERTILIZATION STATUS│ │ PEST/DISEASE        │   │
│  │ 2025-01-15: 2.1 ton │ │ Round 3: 95% done   │ │ Status: Normal      │   │
│  │ 2025-01-07: 1.9 ton │ │ Urea: -6.7% var ⚠   │ │ Last Scout: 2d ago  │   │
│  │ 2024-12-30: 2.0 ton │ │ Next Due: 2025-02-15│ │ Alerts: 0 active    │   │
│  └─────────────────────┘ └─────────────────────┘ └─────────────────────┘   │
└─────────────────────────────────────────────────────────────────────────────┘
```

### 4.4 AI Assistant Panel (Universal)

```
┌─────────────────────────────────────────────────────────────────────────────┐
│  🤖 AI Plantation Assistant                                    [✕] [⚙️]   │
├─────────────────────────────────────────────────────────────────────────────┤
│  Context: Estate 1 > Afdeling 3 > Block A12 | 2025-01-01 to 2025-01-15     │
│  ─────────────────────────────────────────────────────────────────────────  │
│  💬 Ask me anything about this block, afdeling, or estate...                │
│  ┌─────────────────────────────────────────────────────────────────────┐   │
│  │ 👤 "Why is yield down 15% in Afdeling 3 last 3 months?"            │   │
│  └─────────────────────────────────────────────────────────────────────┘   │
│  ┌─────────────────────────────────────────────────────────────────────┐   │
│  │ 🤖 **AI Insight** (Confidence: 87%)                                 │   │
│  │ ─────────────────────────────────────────────────────────────────   │   │
│  │ **Problem:** Afdeling 3 FFB yield declined 15% (2.8→2.4 ton/ha)    │   │
│  │ over last 3 months vs same period last year.                        │   │
│  │                                                                     │   │
│  │ **Evidence:**                                                       │   │
│  │ • Harvest data: 3 blocks (A10, A11, A12) show consistent decline   │   │
│  │ • Fertilization: Round 2 Urea under-applied 18% (Block A11, A12)   │   │
│  │ • Pest: Bagworm incidence 8% > 5% threshold (Block A10, A11)       │   │
│  │ • Rainfall: 220mm vs 180mm avg (waterlogging in low-lying areas)   │   │
│  │                                                                     │   │
│  │ **Root Cause Hypotheses:**                                          │   │
│  │ 1. Nutrient deficiency (N) from under-fertilization [High, 78%]    │   │
│  │ 2. Bagworm defoliation reducing photosynthesis [Medium, 65%]       │   │
│  │ 3. Waterlogging stress in Blocks A10, A11 [Medium, 55%]           │   │
│  │                                                                     │   │
│  │ **Recommendations:**                                                │   │
│  │ 🔴 Immediate: Spot-apply Urea 0.5kg/palm to Blocks A11, A12        │   │
│  │ 🔴 Immediate: Bagworm control - biological spray Blocks A10, A11   │   │
│  │ 🟡 Preventive: Improve drainage in low-lying areas of A10, A11     │   │
│  │ 🟢 Monitor: Weekly yield tracking for next 4 weeks                 │   │
│  │                                                                     │   │
│  │ **Citations:**                                                      │   │
│  │ [1] Harvest tickets Jan 2025 | [2] Fert WO-FERT-2025-001198       │   │
│  │ [3] Pest Scout 2025-01-10 | [4] SOP: Fertilization Ch. 4.2        │   │
│  │ [5] SOP: Pest Control Ch. 7.3                                       │   │
│  │                                                                     │   │
│  │ **Missing Info:** Leaf analysis for Blocks A10-A12 (last: 2024-09) │   │
│  │ **Actions:** [Create Fert WO] [Create Pest WO] [View Blocks]       │   │
│  └─────────────────────────────────────────────────────────────────────┘   │
│  ─────────────────────────────────────────────────────────────────────────  │
│  💡 Suggested: "Show fertilization plan vs actual for Block A11"           │
│  💡 Suggested: "What's the bagworm threshold for intervention?"            │
│  ─────────────────────────────────────────────────────────────────────────  │
│  [👍 Helpful] [👎 Not Helpful]    [New Question]                          │
└─────────────────────────────────────────────────────────────────────────────┘
```

### 4.5 Weighbridge Station (Desktop - Kiosk Mode)

```
┌─────────────────────────────────────────────────────────────────────────────┐
│  ⚖️ WEIGHBRIDGE STATION - Mill 1                              [👤] [⚙️]   │
├─────────────────────────────────────────────────────────────────────────────┤
│  CURRENT TRUCK                                                               │
│  ┌──────────────────────────────────────────────────────────────────────┐   │
│  │  🚛 Vehicle: B-1234 XYZ    Driver: Budi Santoso    Trip: TRP-001234 │   │
│  │  📍 From: TPH Afdeling 3    📦 Est. Load: 22.0 ton                   │   │
│  │  ⏰ Arrived: 09:42:15      Status: ON WEIGHBRIDGE                    │   │
│  └──────────────────────────────────────────────────────────────────────┘   │
│                                                                              │
│  ┌──────────────┐ ┌──────────────┐ ┌──────────────┐ ┌──────────────┐       │
│  │ GROSS        │ │ TARE         │ │ NET          │ │ GRADE        │       │
│  │ 32,500 kg    │ │ 10,200 kg    │ │ 22,300 kg    │ │ A (Auto)     │       │
│  │ ████████████ │ │ ██████       │ │ ████████████ │ │ ✓ Confirmed  │       │
│  └──────────────┘ └──────────────┘ └──────────────┘ └──────────────┘       │
│                                                                              │
│  DEDUCTIONS                                                                  │
│  ┌─────────────┬───────┬─────────────┬───────┬─────────────┬───────┐       │
│  │ Brondolan   │ 50 kg │ Long Stalk  │ 20 kg │ Dirty       │ 15 kg │       │
│  │ Wet         │ 0 kg  │ Foreign     │ 0 kg  │ Total Ded.  │ 85 kg │       │
│  └─────────────┴───────┴─────────────┴───────┴─────────────┴───────┘       │
│  Net Clean: 22,215 kg                                                        │
│                                                                              │
│  SOURCE ALLOCATION (Auto from Dispatch)                                      │
│  ┌─────────────┬──────────┬──────────┬──────────────────────────────────┐   │
│  │ Block       │ Weight   │ %        │ Dispatch Ref                     │   │
│  ├─────────────┼──────────┼──────────┼──────────────────────────────────┤   │
│  │ A10         │ 8,500 kg │ 38.2%    │ DISP-2025-001234                 │   │
│  │ A11         │ 7,200 kg │ 32.4%    │ DISP-2025-001234                 │   │
│  │ A12         │ 6,600 kg │ 29.4%    │ DISP-2025-001234                 │   │
│  └─────────────┴──────────┴──────────┴──────────────────────────────────┘   │
│                                                                              │
│  ┌──────────────────────────────────────────────────────────────────────┐   │
│  │                    [CONFIRM & PRINT TICKET]                          │   │
│  └──────────────────────────────────────────────────────────────────────┘   │
│                                                                              │
│  RECENT TICKETS (Auto-refresh)                                               │
│  ┌────┬──────────┬────────┬────────┬──────┬──────┬──────┬────────────────┐  │
│  │ #  │ Vehicle  │ Gross  │ Net    │ Grade│ Time │ Src  │ Action         │  │
│  ├────┼──────────┼────────┼────────┼──────┼──────┼──────┼────────────────┤  │
│  │ 001│ B-1234   │ 32,500 │ 22,300 │ A    │ 09:42│ A10  │ [Print] [Void] │  │
│  │ 002│ B-5678   │ 28,900 │ 19,200 │ B    │ 09:15│ A05  │ [Print] [Void] │  │
│  │ 003│ B-9012   │ 31,200 │ 21,800 │ A    │ 08:58│ B12  │ [Print] [Void] │  │
│  └────┴──────────┴────────┴────────┴──────┴──────┴──────┴────────────────┘  │
└─────────────────────────────────────────────────────────────────────────────┘
```

---

## 5. Design System

### 5.1 Color Palette

#### Primary Colors (Brand)
| Name | Hex | RGB | Usage |
|------|-----|-----|-------|
| **Primary 50** | #F0FDF4 | 240, 253, 244 | Light backgrounds |
| **Primary 100** | #DCFCE7 | 220, 252, 231 | Hover states |
| **Primary 500** | **#22C55E** | **34, 197, 94** | **Main brand, primary buttons, active states** |
| **Primary 600** | #16A34A | 22, 163, 74 | Button hover |
| **Primary 700** | #15803D | 21, 128, 61 | Button active |
| **Primary 900** | #14532D | 20, 83, 45 | Dark text on light green |

#### Semantic Colors
| Name | Hex | Usage |
|------|-----|-------|
| **Success** | #22C55E | Success states, positive trends, completed |
| **Warning** | #F59E0B | Alerts, pending, attention needed |
| **Danger** | #EF4444 | Errors, critical alerts, deletions, overdue |
| **Info** | #3B82F6 | Information, neutral actions, links |
| **Neutral** | #6B7280 | Secondary text, disabled, borders |

#### Status Colors (Domain-Specific)
| Status | Hex | Usage |
|--------|-----|-------|
| **Harvest Grade A** | #22C55E | Premium quality |
| **Harvest Grade B** | #3B82F6 | Standard quality |
| **Harvest Grade C** | #F59E0B | Below standard |
| **Harvest Grade D** | #EF4444 | Reject quality |
| **Restan Alert** | #EF4444 | >5% threshold |
| **Interval OK** | #22C55E | 7-10 days |
| **Interval Warning** | #F59E0B | 11-14 days |
| **Interval Critical** | #EF4444 | >14 days |
| **Stock OK** | #22C55E | > Max |
| **Stock Low** | #F59E0B | Min to Max |
| **Stock Critical** | #EF4444 | < Min |
| **OER On Target** | #22C55E | >21.5% |
| **OER Below** | #F59E0B | 20-21.5% |
| **OER Critical** | #EF4444 | <20% |

#### Neutral Scale
| Name | Hex | Usage |
|------|-----|-------|
| **Gray 50** | #F9FAFB | Page backgrounds |
| **Gray 100** | #F3F4F6 | Card backgrounds |
| **Gray 200** | #E5E7EB | Borders, dividers |
| **Gray 300** | #D1D5DB | Input borders, disabled |
| **Gray 400** | #9CA3AF | Placeholder text |
| **Gray 500** | #6B7280 | Secondary text |
| **Gray 600** | #4B5563 | Body text |
| **Gray 700** | #374151 | Headings |
| **Gray 800** | #1F2937 | Dark headings |
| **Gray 900** | #111827 | Primary text |
| **Gray 950** | #030712 | Near black |

### 5.2 Typography

| Element | Font | Size | Weight | Line Height | Color |
|---------|------|------|--------|-------------|-------|
| **Display XL** | Inter | 48px | 700 | 1.1 | Gray 900 |
| **Display LG** | Inter | 36px | 700 | 1.2 | Gray 900 |
| **Display MD** | Inter | 28px | 600 | 1.2 | Gray 900 |
| **Heading 1** | Inter | 24px | 600 | 1.3 | Gray 900 |
| **Heading 2** | Inter | 20px | 600 | 1.3 | Gray 800 |
| **Heading 3** | Inter | 18px | 600 | 1.4 | Gray 800 |
| **Heading 4** | Inter | 16px | 600 | 1.4 | Gray 700 |
| **Body LG** | Inter | 16px | 400 | 1.6 | Gray 700 |
| **Body MD** | Inter | 14px | 400 | 1.6 | Gray 600 |
| **Body SM** | Inter | 12px | 400 | 1.5 | Gray 500 |
| **Label** | Inter | 12px | 500 | 1.4 | Gray 700 |
| **Caption** | Inter | 11px | 400 | 1.4 | Gray 500 |
| **Code/Mono** | JetBrains Mono | 13px | 400 | 1.5 | Gray 700 |
| **Numbers/KPI** | Inter | 24px | 700 | 1.1 | Primary 700 |

**Mobile Adjustments:** -2px for headings, -1px for body

### 5.3 Spacing System (4px Base)

| Token | Value | Usage |
|-------|-------|-------|
| **space-1** | 4px | Tight gaps |
| **space-2** | 8px | Small gaps, icon-text |
| **space-3** | 12px | Form field gaps |
| **space-4** | 16px | Standard card padding |
| **space-5** | 20px | Section gaps |
| **space-6** | 24px | Large section gaps |
| **space-8** | 32px | Page margins |
| **space-10** | 40px | Large page margins |
| **space-12** | 48px | Hero sections |

### 5.4 Border Radius

| Token | Value | Usage |
|-------|-------|-------|
| **radius-none** | 0 | Tables, full-width |
| **radius-sm** | 4px | Inputs, badges |
| **radius-md** | 8px | Cards, buttons, modals |
| **radius-lg** | 12px | Large cards, sheets |
| **radius-xl** | 16px | Mobile bottom sheets |
| **radius-full** | 9999px | Pills, avatars, FAB |

### 5.5 Shadows

| Token | Value | Usage |
|-------|-------|-------|
| **shadow-sm** | 0 1px 2px rgba(0,0,0,0.05) | Cards, inputs |
| **shadow-md** | 0 4px 6px rgba(0,0,0,0.07) | Elevated cards |
| **shadow-lg** | 0 10px 15px rgba(0,0,0,0.1) | Modals, dropdowns |
| **shadow-xl** | 0 20px 25px rgba(0,0,0,0.15) | Drawers, sheets |

### 5.6 Component Library (Core)

#### Buttons
```css
/* Primary */
.btn-primary { @apply bg-primary-500 text-white px-4 py-2 rounded-md font-medium 
                hover:bg-primary-600 active:bg-primary-700 
                disabled:bg-primary-300 transition-colors; }

/* Secondary */
.btn-secondary { @apply bg-gray-100 text-gray-900 px-4 py-2 rounded-md font-medium
                  hover:bg-gray-200 active:bg-gray-300
                  disabled:bg-gray-50 disabled:text-gray-400 transition-colors; }

/* Danger */
.btn-danger { @apply bg-danger text-white px-4 py-2 rounded-md font-medium
               hover:bg-red-600 active:bg-red-700 transition-colors; }

/* Ghost */
.btn-ghost { @apply text-gray-700 px-4 py-2 rounded-md font-medium
              hover:bg-gray-100 active:bg-gray-200 transition-colors; }

/* Sizes */
.btn-sm { @apply px-3 py-1.5 text-sm; }
.btn-lg { @apply px-6 py-3 text-base; }
.btn-xl { @apply px-8 py-4 text-lg; } /* Mobile touch targets */
```

#### Form Inputs
```css
.input { @apply w-full px-3 py-2 border border-gray-300 rounded-md 
          text-gray-900 placeholder-gray-400
          focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent
          disabled:bg-gray-50 disabled:text-gray-500; }

.input-error { @apply border-danger focus:ring-danger; }
.input-success { @apply border-success focus:ring-success; }

.label { @apply block text-sm font-medium text-gray-700 mb-1; }
.helper-text { @apply mt-1 text-sm text-gray-500; }
.error-text { @apply mt-1 text-sm text-danger; }
```

#### Cards
```css
.card { @apply bg-white rounded-lg shadow-sm border border-gray-200; }
.card-header { @apply px-4 py-3 border-b border-gray-200; }
.card-body { @apply p-4; }
.card-footer { @apply px-4 py-3 border-t border-gray-200 bg-gray-50 rounded-b-lg; }
```

#### Tables
```css
.table { @apply w-full text-sm; }
.table th { @apply px-3 py-2 text-left font-medium text-gray-700 bg-gray-50 border-b border-gray-200; }
.table td { @apply px-3 py-2 text-gray-900 border-b border-gray-100; }
.table tr:hover { @apply bg-gray-50; }
.table-striped tr:nth-child(even) { @apply bg-gray-50; }
```

#### Badges/Status Pills
```css
.badge { @apply inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium; }
.badge-success { @apply bg-green-100 text-green-800; }
.badge-warning { @apply bg-yellow-100 text-yellow-800; }
.badge-danger { @apply bg-red-100 text-red-800; }
.badge-info { @apply bg-blue-100 text-blue-800; }
.badge-gray { @apply bg-gray-100 text-gray-800; }
```

#### Avatar
```css
.avatar { @apply inline-flex items-center justify-center rounded-full bg-primary-100 text-primary-700 font-medium; }
.avatar-sm { @apply w-6 h-6 text-xs; }
.avatar-md { @apply w-8 h-8 text-sm; }
.avatar-lg { @apply w-12 h-12 text-base; }
```

#### KPI Metric Card
```html
<div class="card p-4">
  <div class="flex items-center justify-between">
    <div>
      <p class="text-sm text-gray-500">FFB Yield</p>
      <p class="text-2xl font-bold text-gray-900 mt-1">24.5</p>
      <p class="text-xs text-gray-500 mt-1">ton/ha/year</p>
    </div>
    <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center">
      <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
      </svg>
    </div>
  </div>
  <div class="mt-3 flex items-center text-sm">
    <span class="text-green-600 font-medium">+3.2%</span>
    <span class="text-gray-500 ml-1">vs last year</span>
  </div>
</div>
```

---

## 6. Responsive Design Specifications

### 6.1 Breakpoints

| Breakpoint | Name | Min Width | Target Devices |
|------------|------|-----------|----------------|
| **xs** | Mobile Portrait | 320px | Small phones |
| **sm** | Mobile Landscape | 480px | Large phones |
| **md** | Tablet Portrait | 768px | iPad, tablets |
| **lg** | Tablet Landscape | 1024px | Large tablets, small laptops |
| **xl** | Desktop | 1280px | Standard monitors |
| **2xl** | Wide Desktop | 1536px | Large monitors |

### 6.2 Layout Behavior

| Component | xs (<480) | sm (480-767) | md (768-1023) | lg (1024-1279) | xl (≥1280) |
|-----------|-----------|--------------|---------------|----------------|------------|
| **Side Nav** | Drawer (hamburger) | Drawer | Collapsible rail (72px) | Expanded (260px) | Expanded |
| **Top Bar** | Full width, stacked | Full width | Full width | Full width | Full width |
| **Dashboard Grid** | 1 col | 1 col | 2 col | 3 col | 4 col |
| **KPI Cards** | 1 col | 2 col | 2 col | 3 col | 4 col |
| **Tables** | Horizontal scroll | Horizontal scroll | Full | Full | Full |
| **Forms** | Single column | Single column | 2 col | 2-3 col | 3 col |
| **Modals** | Full screen bottom sheet | Full screen bottom sheet | Centered (max-w-2xl) | Centered (max-w-3xl) | Centered (max-w-4xl) |
| **Charts** | Full width, simplified | Full width | Full width | Full width | Full width |
| **Mobile FAB** | Visible | Visible | Hidden | Hidden | Hidden |

### 6.3 Mobile-Specific Patterns

#### Bottom Sheet (Mobile Modal)
```
┌─────────────────────────────────────┐
│  Page Content (dimmed)              │
│                                     │
├─────────────────────────────────────┤
│  ══════════════════════════════════  │ ← Drag handle
│  ┌─────────────────────────────────┐ │
│  │ Sheet Title              [✕]    │ │
│  ├─────────────────────────────────┤ │
│  │                                 │ │
│  │   Sheet Content                 │ │
│  │   (scrollable)                  │ │
│  │                                 │ │
│  ├─────────────────────────────────┤ │
│  │ [Cancel]         [Confirm]      │ │
│  └─────────────────────────────────┘ │
└─────────────────────────────────────┘
```

#### Touch Targets
- Minimum: **44×44px** (iOS) / **48×48dp** (Android)
- Recommended: **48×48px** for all interactive elements
- Spacing between targets: **8px minimum**

#### Swipe Actions (Lists)
```
┌─────────────────────────────────────┐
│  Item Content          [Edit][Del]  │ ← Swipe left reveals actions
└─────────────────────────────────────┘
```

#### Pull-to-Refresh
- Standard iOS/Android pattern
- Trigger on lists, dashboards
- Visual feedback: spinner + "Pull to refresh"

### 6.4 Table Responsive Strategies

| Strategy | When | Implementation |
|----------|------|----------------|
| **Horizontal Scroll** | Default | `overflow-x-auto` on table wrapper |
| **Column Hide** | md+ | Hide low-priority cols with `hidden md:table-cell` |
| **Card Layout** | xs | Transform rows to stacked cards |
| **Priority Columns** | Always | First 2-3 cols always visible |

---

## 7. Usability Review Checklist

### 7.1 Heuristic Evaluation (Nielsen's 10)

| # | Heuristic | Check Items | Status |
|---|-----------|-------------|--------|
| 1 | **Visibility of System Status** | Loading states, sync status, real-time indicators, progress bars | ☐ |
| 2 | **Match System & Real World** | Domain terminology (TBS, FFB, OER, Restan, TPH), Indonesian language | ☐ |
| 3 | **User Control & Freedom** | Undo draft, cancel actions, back navigation, exit full-screen | ☐ |
| 4 | **Consistency & Standards** | Design system adherence, consistent patterns across modules | ☐ |
| 5 | **Error Prevention** | Confirmation dialogs, validation inline, required field indicators | ☐ |
| 6 | **Recognition over Recall** | Searchable dropdowns, recent items, smart defaults, context preservation | ☐ |
| 7 | **Flexibility & Efficiency** | Keyboard shortcuts, bulk actions, quick entry modes, FAB for frequent actions | ☐ |
| 8 | **Aesthetic & Minimalist** | Clean layouts, progressive disclosure, no clutter, focused workflows | ☐ |
| 9 | **Error Recovery** | Clear error messages, suggested fixes, retry mechanisms, offline queue | ☐ |
| 10 | **Help & Documentation** | Tooltips, onboarding tours, help center, AI assistant contextual help | ☐ |

### 7.2 Mobile Usability (Additional)

| Area | Check Items | Status |
|------|-------------|--------|
| **Touch Targets** | All interactive ≥48px, adequate spacing | ☐ |
| **Thumb Zone** | Primary actions in bottom 1/3, FAB accessible | ☐ |
| **Offline Feedback** | Clear offline banner, pending count, sync button | ☐ |
| **Orientation** | Portrait primary, landscape for tables/charts | ☐ |
| **Keyboard** | Numeric for weights, appropriate input types | ☐ |
| **Gestures** | Swipe actions, pull-to-refresh, pinch zoom maps | ☐ |
| **Battery/Network** | Efficient sync, background upload, low-data mode | ☐ |

### 7.3 Accessibility (WCAG 2.1 AA)

| Criterion | Check Items | Status |
|-----------|-------------|--------|
| **1.1 Non-text Content** | Alt text for images, icons have labels, charts have data tables | ☐ |
| **1.3 Adaptable** | Semantic HTML, heading hierarchy, form labels, table headers | ☐ |
| **1.4 Distinguishable** | Color contrast ≥4.5:1, not color-only, text resize to 200% | ☐ |
| **2.1 Keyboard** | All functions keyboard accessible, focus visible, skip links | ☐ |
| **2.4 Navigable** | Page titles, headings, landmarks, focus order logical | ☐ |
| **3.1 Readable** | Language declared, unusual words defined, abbreviations expanded | ☐ |
| **3.2 Predictable** | Consistent navigation, no unexpected changes on focus/input | ☐ |
| **3.3 Input Assistance** | Error identification, labels/instructions, error suggestions | ☐ |
| **4.1 Compatible** | Valid HTML, ARIA labels where needed, status messages announced | ☐ |

### 7.4 Indonesian Localization

| Item | Requirement | Status |
|------|-------------|--------|
| **Language** | Bahasa Indonesia primary, English fallback | ☐ |
| **Date Format** | DD/MM/YYYY (Indonesian) | ☐ |
| **Number Format** | 1.234,56 (dot thousand, comma decimal) | ☐ |
| **Currency** | IDR format: Rp 1.234.567 | ☐ |
| **Units** | Metric (ha, kg, ton, km, liter) | ☐ |
| **Terminology** | Local terms: TBS, Restan, TPH, Afdeling, Mandor, Bibit | ☐ |
| **RTL Support** | Not required (Indonesian is LTR) | N/A |

---

## 8. Acceptance Criteria for Phase 4

| Criteria | Description | Verification |
|----------|-------------|--------------|
| AC-4.1 | User flows documented for all 11 key roles | Flow review with SMEs |
| AC-4.2 | Sitemap covers all 14 modules with clear hierarchy | IA review |
| AC-4.3 | Role-based dashboards designed with key widgets | Dashboard wireframe review |
| AC-4.4 | Wireframes completed for 10+ critical screens (mobile + desktop) | Wireframe walkthrough |
| AC-4.5 | Design system documented: colors, typography, spacing, components | Design system audit |
| AC-4.6 | Responsive specs defined for all breakpoints | Responsive test plan |
| AC-4.7 | Usability checklist covers heuristics, mobile, accessibility, localization | Checklist completion |
| AC-4.8 | Components ready for Livewire/Blade implementation | Component inventory |
| AC-4.9 | AI Assistant UI designed with insight format | AI UI review |
| AC-4.10 | Offline-first mobile patterns documented | Mobile architecture review |

---

## 9. Next Steps (Phase 5 Preview)

1. **Development Foundation** - Laravel project setup, authentication, master data CRUD
2. **Component Implementation** - Build design system components in Livewire/Blade
3. **Core Module Scaffolding** - Master Data, Plantation, Harvest modules
4. **Mobile App Setup** - Flutter/React Native or PWA with offline support
5. **CI/CD Pipeline** - Testing, linting, deployment automation

---

## 10. Approval

| Role | Name | Signature | Date |
|------|------|-----------|------|
| UI/UX Designer Lead | | | |
| Frontend Technical Lead | | | |
| Product Owner (Client) | | | |
| Field Operations Representative | | | |
| Accessibility Auditor | | | |
| Project Manager | | | |

---

*Document Version: 1.0 | Phase 4 - UI/UX Design*
*Generated as part of AI-Powered Integrated Palm Oil Plantation MIS Project*